<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Category;
use App\Models\File;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends BaseController{

    public function __construct(Request $request)
    {
        $this->categories = Category::all();
        $this->files = File::all();
        $this->request = $request;
        $this->middleware('auth');
    }

    public function showForm(){
        return view('/admin/files/create',['categories'=>$this->categories,'request'=>$this->request]);
    }

    public function store(Request $request){
        if($request->isMethod('post')){

            /**Validate Posted data */
            $request->validate([
                'name' =>'required|min:4|max:40',
                'author' =>'required',
                'category' =>'required',
                'description' =>'required|min:2|max:2000',
                'fileProduct' =>'required|file',
            ]);

            /**Validate file was uploaded and store in file directory */
            if($request->hasFile('fileProduct')){
                /**Documents uploaded saved in file directory */
                $fileExtension = strtolower($request->fileProduct->extension()); 
                $document = array('pdf','doc','docx','ppt','pptx','txt');
                $images = array('jpg','jpeg','gif','png');
                
                if(in_array($fileExtension, $document)){
                    $file_path = $request->fileProduct->store('files/documents');
                }
                elseif(in_array($fileExtension, $images)){
                    $file_path = $request->fileProduct->store('files/images');
                }                   
                else{
                    return redirect('admin/files/create')->with('error','Invalid file format');
                }
            }
            else{
                return redirect('admin/files/create')->with('error','File issue ');
            }

            File::create([
                'name' => $request->name,
                'author' => $request->author,
                'category' => $request->category,
                'description' => $request->description,
                'file_path' => $file_path,
            ]);
            return redirect('admin/files')->with('success','File added successfully');
            exit;
        }
        else{
            return redirect('admin/files/create')->with('error','Please try again');
        }
    }

    public function show(){
        return view('admin/files/inventory',['files'=>$this->files,]);
    }

    public function edit(){

    }

    public function delete(){

    }
}