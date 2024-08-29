<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('product.index',['products'=>$products]);
    }
    public function create(){
        return view('product.create');
    }
   public function store(Request $request){
    //   dd($request);
    $data = $request->validate([
       'name'=>'required',
       'email'=>'required',
       'price'=>'required|numeric',
       'describtion'=>'nullable'
    ]);
    $newProduct = Product::create($data);
     return redirect(route('product.index'));
   }
   public function edit(Product $product){
      return view('product.edit',['product'=> $product]);
   }
   public function update(Product $product,Request $request){
    $data = $request->validate([
        'name'=>'required',
        'email'=>'required',
        'price'=>'required|numeric',
        'describtion'=>'nullable'
     ]);
     $product->update($data);
     return redirect(route('product.index'))->with('sucess','Product Updated Successfully');
 }
     public function delete(Product $product){
         $product->delete();
         return redirect(route('product.index'))->with('sucess','Deleted Updated Successfully');
     }
}
