<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function view_catagory(){
        $data=Catagory::all();

        return view('admin.catagory',compact('data'));

    }

    public function add_catagory(Request $request){

    $data=new catagory;

    $data->catagory=$request->catagory;

    $data->save();

    return redirect()->back()->with('message','Catagory Added Successfully');
    }
    public function delete_catagory($id){
        $data=catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Cataogry deleted succusful');

    }
    public function view_product(){
        $catagory=catagory::all();

        return view('admin.product',compact('catagory'));
    }
    public function add_product(Request $request){

        $product=new Product();

        $product->title=$request->title;
        $product->description=$request->descrption;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->quantity=$request->quantity;
        $product->catagory=$request->catagory;

        $image=$request->image;
        $iamgename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('products',$iamgename);
        $product->image=$iamgename;

        $product->save();


        return redirect()->back()->with('message','product added successfully');






    }
    public function show_product(){
        $Product=Product::all();


        return view('admin.show_product',compact('Product'));
    }
    public function delete_product($id){
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product deleted succusful');


    }
    public function edit_product($id){
$product=Product::find($id);
$catagory=catagory::all();


       return view('admin.edit_product',compact('product'),compact('catagory'));
    }

    public function edit_product_conf(Request $request,$id){
        $product=Product::find($id);

        $product->title=$request->title;
        $product->description=$request->descrption;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->quantity=$request->quantity;
        $product->catagory=$request->catagory;

        $image=$request->image;

        if( $image){
            $iamgename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('products',$iamgename);
        $product->image=$iamgename;




        }

        $product->save();


        return redirect()->back()->with('message','product updated successfully');

    }
}
