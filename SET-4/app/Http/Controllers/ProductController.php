<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products=Product::all();
        return view('products.index',compact('products'));        
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        try{
        $request->validate([
            'name'=>'required|min:3',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric',
        ]);

        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
        ]);

        return redirect('/product-form')->with('success','Product Added Successfully');
        }catch(\Exception $e){
            dd($e);
        }
    }
}
