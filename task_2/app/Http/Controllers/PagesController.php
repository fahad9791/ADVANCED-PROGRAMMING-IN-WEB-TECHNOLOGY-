<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class PagesController extends Controller
{
    public function index()
    {
        return view('product.home');
    }

    public function view()
    {
        $products = product::all();
        //return $products;

        return view('product.view')
        ->with('products', $products);
    }

    public function create()
    {
        return view('product.create');
    }

    public function edit(Request $req)
    {
        $product = product::where('id', '=', decrypt($req->id))
        ->first();
        //return $product;

        return view('product.edit')
        ->with('product', $product);
    }

    public function delete(Request $req)
    {
         $product = product::where('id', '=', decrypt($req->id))
        ->first();
        //return $product;

        return view('product.delete')
        ->with('product', $product);
    }

    public function createsubmit(Request $req)
    {
        $req->validate(
            [
                'name'=>'required',
                'price'=>'required',
                'qty'=>'required',
                'description'=>'required'

            ],
            [

                'name.required'=>'Please provide product name',
                'price.required'=>'Please provide product price',
                'qty.required'=>'Please provide product qty',
                'description.required'=>'Please provide product description'

            ]
        );

        $pro = new product();
        $pro->name = $req->name;
        $pro->price = $req->price;
        $pro->qty = $req->qty;
        $pro->description = $req->description;
        $pro->save();

        return "<h1>Product Added Successfully</h1>";
    }

    public function editsubmit(Request $req)
    {
        $req->validate(
            [
                'name'=>'required',
                'price'=>'required',
                'qty'=>'required',
                'description'=>'required'

            ],
            [

                'name.required'=>'Please provide product name',
                'price.required'=>'Please provide product price',
                'qty.required'=>'Please provide product qty',
                'description.required'=>'Please provide product description'

            ]
        );

        $pro = product::where('id', '=', decrypt($req->id))
        ->first();
        //return $product;

        $pro->name = $req->name;
        $pro->price = $req->price;
        $pro->qty = $req->qty;
        $pro->description = $req->description;
        $pro->save();

        return "<h1>Product Edited Successfully</h1>";
       
    }

    public function deletesubmit(Request $req)
    {

        $pro = product::where('id', '=', decrypt($req->id))
        ->first();
        //return $pro;

        $pro->name = $req->name;
        $pro->price = $req->price;
        $pro->qty = $req->qty;
        $pro->description = $req->description;
        $pro->delete();

        return "<h1>Product Deleted Successfully</h1>";
       
    }



}
