<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
use Toastr;
class ProductsController extends Controller
{

	 public function index(){
        $products =Product::orderBy('id','desc')->paginate(10);
        return view('admin.product.index',compact('products'));
    }
    public function create(){
    	 $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    public function edit($id){
        $product = Product::find($id);
         $categories = Category::orderBy('id','desc')->get();
        return view('admin.product.edit',[
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request){
        // return $request->all();

        $this->validate($request,array(
            'image' => 'required|mimes:png,jpg,jpeg' ,
            'name' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' =>'required',
          
        ));

        $products = new Product();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $directory = 'assets/frontend/img/product-image/';
            $imgUrl = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $products->image = $imgUrl;
        }

        $products->category_id = $request->category;
         $products->name = $request->name;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->save();
        Toastr::success('Product Updated Successfully...');
        return redirect()->back();
    }

    public function update(Request $request){
        // return $request->all();

        $this->validate($request,array(
            'image' => 'nullable|mimes:png,jpg,jpeg' ,
            'name' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' =>'required',
        ));

        $products =  Product::find($request->id);
        if($request->hasFile('image')){
            @unlink($products->image);
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalName();
            $directory = 'assets/frontend/img/product-image/';
            $imgUrl = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $products->image = $imgUrl;
        }

        $products->category_id = $request->category;
        $products->name = $request->name;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->save();
        Toastr::success('Product Updated Successfully...');
        return redirect()->back();
    }
    public function delete(Request $request){

       

        $products = Product::find($request->id);
        @unlink($products->image);
        $products->delete();
        Toastr::success('Product Deleted Successfully...');
        return redirect()->back();
    }

  
}
