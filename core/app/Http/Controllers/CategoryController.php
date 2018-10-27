<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Image;
use Toastr;
class CategoryController extends Controller
{
     public function index(){
        $categories = Category::paginate(10);
        return view('admin.category.index',compact('categories'));
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request){
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return 1;
    }
}
