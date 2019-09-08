<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Request;
use PHPUnit\Framework\Exception;

class CategoryController extends BaseController{
    public function __construct()
    {
        $this->categories = Category::all();
        $this->middleware('auth');
    }

    public function show(){
        return view('admin/files/categories',['categories'=>$this->categories]);
    }

    public function store(Request $request){
        if($request->has('name')){
            $request->validate([
                'name' =>'required|unique:categories|min:4'
            ]);
            Category::create([
                'name' => $request->name,
            ]);
            return redirect('admin/files/categories')->with('success','Created successfully');
            exit;
        }else{
            throw new Exception('Error');
        }
    }
}