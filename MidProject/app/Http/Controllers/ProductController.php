<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop_registration;
use App\Models\product;
use App\Models\customer;
use App\Models\order;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.user');
    }

    public function view_product(){

        $value = session()->get('id');
        $pro = product::where('s_id', $value)
        ->get();
        //return $pro;


        return view('shop.view_product')
        ->with('pro', $pro);
    }

    public function add_product(){
        return view('shop.add_product');
    }

    public function update_product(){

        $value = session()->get('id');
        $pro = product::where('s_id', $value)
        ->get();


        return view('shop.update_product')
        ->with('pro', $pro);
    }

    public function delete_product(){

        $value = session()->get('id');
        $pro = product::where('s_id', $value)
        ->get();


        return view('shop.delete_product')
        ->with('pro', $pro);
    }

    public function add_productsubmit(Request $req){

        $req->validate(
            [
                'p_category'=>'required',
                'p_name'=>'required|regex:/^[A-Z a-z & 0-9 -]+$/',
                'p_price'=>'required',
                'p_quantity'=>'required',
                'p_picture'=>'required|mimes:png,jpg'

            ],
            [
                'p_category.required'=>'Please select product category',
                'p_name.required'=>'Please enter product name',
                'p_price.required'=>'Please enter product price',
                'p_quantity.required'=>'Please enter product quantity',
                'p_picture.required'=>'Please select a product picture',
                'p_picture.mimes'=>'The picture must be a file of type: png, jpg.'
                
            ]
        );

        $file_name = $req->file('p_picture')->getClientOriginalName();
        $folder = $req->file('p_picture')->move(public_path('products').'/',$file_name);

        $value = session()->get('id');

        $pro = new product();
        $pro->p_category = $req->p_category;
        $pro->p_name = $req->p_name;
        $pro->p_price = $req->p_price;
        $pro->p_quantity = $req->p_quantity;
        $pro->p_picture = $file_name;
        $pro->s_id = $value;
        $pro->save();


        return redirect()->route('view_product');


    }

    public function product_details_update(Request $req){

        $pro = product::where('id', $req->id)
        ->first();
        //return $pro;

         return view('shop.product_details_update')
        ->with('pro', $pro);
    }

    public function product_details_updatesubmit(Request $req){


        $req->validate(
            [
                'p_category'=>'required',
                'p_name'=>'required|regex:/^[A-Z a-z & 0-9 -]+$/',
                'p_price'=>'required',
                'p_quantity'=>'required',
                'p_picture'=>'required|mimes:png,jpg'

            ],
            [
                'p_category.required'=>'Please select product category',
                'p_name.required'=>'Please enter product name',
                'p_price.required'=>'Please enter product price',
                'p_quantity.required'=>'Please enter product quantity',
                'p_picture.required'=>'Please select a product picture',
                'p_picture.mimes'=>'The picture must be a file of type: png, jpg.'
                
            ]
        );

        $file_name = $req->file('p_picture')->getClientOriginalName();
        $folder = $req->file('p_picture')->move(public_path('products').'/',$file_name);

        $pro = product::where('id', $req->id)
        ->first();

        $pro->p_category = $req->p_category;
        $pro->p_name = $req->p_name;
        $pro->p_price = $req->p_price;
        $pro->p_quantity = $req->p_quantity;
        $pro->p_picture = $file_name;
        $pro->save();

         return view('shop.product_details_update')
        ->with('pro', $pro);
    }

    public function product_details_delete(Request $req){

        $pro = product::where('id', $req->id)
        ->first();
        //return $pro;

         return view('shop.product_details_delete')
        ->with('pro', $pro);
    }

    public function product_details_deletesubmit(Request $req){



        $pro = product::where('id', '=', $req->id)
        ->first();
        //return $pro;

        $pro->delete();

        $req->session()->flash('delete_success', 'Product Deleted Successfully');

        return view('shop.dashboard');
    }


}
