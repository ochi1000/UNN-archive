<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Models\File;

class SearchController extends Controller
{
  public $searchRequest;    
  public $search;

  public function search(Request $request){
    
    if($request->isMethod('get')){
      /**Validate Posted data */
      $request->validate([
          'search' =>'required|max:20',
      ]);
        $this->search = File::where('name', 'LIKE', '%' . $request->search . '%')->paginate(4);
        return view('search', ['search_results' => $this->search, 'search' => $request->search]);

    }
  }
  public function autocomplete(Request $request){
    $search = $request->search;
    $result = File::where('name', 'LIKE', '%' . $search . '%')->get();
    return response()->json($result);
  }

  public function showDetails(Request $request){
    $search = $this->search;
    $searchRequest = $this->searchRequest;
    $file = File::where('id', $request->id)->first();

    $similar_files = File::where('category', $file->category)->where('id', '!=', $file->id)->inRandomOrder()->paginate(4);

    return view('details', ['search_results' => $search, 'search_request' => $searchRequest, 'file' => $file, 'similar_files' => $similar_files]);
  }

  public function download(Request $request){
    $filePath = $request->file_path;
    return response()->download($filePath);
  }
}