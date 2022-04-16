<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\order;
use App\Models\product;
use App\Models\shop_registration;

class ShopAPIController extends Controller
{
    public function view(){

        $cus = customer::all();
        return $cus;
    }

    public function add(Request $req){

        $cus = new customer();
        $cus->name = $req->name;
        $cus->email = $req->email;
        $cus->password = $req->password;
        $cus->gender = $req->gender;
        $cus->dob = '1999-11-03';
        $cus->picture = 'user.jpg';
        $cus->mobile = $req->mobile;
        
        if ($cus->save()) {
            return "customer Added Successful";
        }
    }

    public function update(Request $req){

        $cus = customer::where('id', '=', $req->id)
        ->first();
        $cus->name = $req->name;
        $cus->email = $req->email;
        $cus->password = $req->password;
        $cus->gender = $req->gender;
        $cus->dob = '1999-11-03';
        $cus->picture = 'user.jpg';
        $cus->mobile = $req->mobile;
        if ($cus->save()) {
            return "Updated Successful";
        }
    }

    public function delete(Request $req){

        $cus = customer::where('id', '=', $req->id)
        ->first();
        if ($cus->delete()) {
            return "Deleted Successful";
        }
    }
}
