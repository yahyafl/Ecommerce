<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');
        }else{
            $product=Product::paginate(2);

        return view('home.userpage',compact('product'));
        }
    }
    public function index(){
        $product=Product::paginate(2);

        return view('home.userpage',compact('product'));
    }

    public function product_details($id){

        $products=Product::find($id);
        return view('home.product_details',compact('products'));

    }
}
