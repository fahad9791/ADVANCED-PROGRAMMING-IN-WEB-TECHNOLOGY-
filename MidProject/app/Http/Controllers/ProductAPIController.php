<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\order;
use App\Models\product;
use App\Models\shop_registration;

class ProductAPIController extends Controller
{
    public function view(){

        $pro = product::all();
        return $pro;
    }

    public function add(Request $req){

        $pro = new product();
        $pro->p_category = $req->p_category;
        $pro->p_name = $req->p_name;
        $pro->p_price = $req->p_price;
        $pro->p_quantity = $req->p_quantity;
        $pro->p_picture = 'user.png';
        $pro->s_id = '17';
        
        if ($pro->save()) {
            return "Product Added Successful";
        }
    }

    public function update(Request $req){

        $pro = product::where('id', '=', $req->id)
        ->first();
        $pro->p_category = $req->p_category;
        $pro->p_name = $req->p_name;
        $pro->p_price = $req->p_price;
        $pro->p_quantity = $req->p_quantity;
        if ($pro->save()) {
            return "Updated Successful";
        }
    }

    public function delete(Request $req){

        $pro = product::where('id', '=', $req->id)
        ->first();
        if ($pro->delete()) {
            return "Deleted Successful";
        }
    }
}
