<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use Validator;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\order;
use App\Models\product;
use App\Models\shop_registration;

class PagesAPIController extends Controller
{
    public function view(){

        $sr = shop_registration::all();
        return $sr;
    }

    public function add(Request $req){

        $rules = array(
            "email"=>"required"
        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return $validator->error();
        }
        else{

            $sr = new shop_registration();
            $sr->email = $req->email;
            $sr->name = $req->name;
            $sr->password = md5($req->password);
            $sr->phone = $req->phone;
            $sr->shop_name = $req->shop_name;
            $sr->shop_address = $req->shop_address;
            $sr->picture = 'user.png';

            $details = [
            'title' => 'Mail from Laravel',
            'body' => 'Registration Successful '
        ];
       
        Mail::to($req->email)->send(new \App\Mail\MyTestMail($details));
       
        echo "Mail send"."\n";
            
            if ($sr->save()) {
                return "Registration Successful";
            }else{
                return "Registration Failed";
            }
        }
    }

    public function update(Request $req){

        $sr = shop_registration::where('id', '=', $req->id)
        ->first();
        $sr->name = $req->name;
        $sr->phone = $req->phone;
        $sr->shop_name = $req->shop_name;
        $sr->shop_address = $req->shop_address;
        if ($sr->save()) {
            return "Updated Successful";
        }
    }

    public function delete(Request $req){

        $sr = shop_registration::where('id', '=', $req->id)
        ->first();
        if ($sr->delete()) {
            return "Deleted Successful";
        }
    }

    public function login(Request $req){

        $sr = shop_registration::where('email', '=', $req->email)
        ->where('password', '=', md5($req->password))
        ->first();
        if (!$sr) {
            return "Invalid User";
        }
        return $sr;
        
    }

    public function mail(Request $req){

        $details = [
        'title' => 'Mail from fahad',
        'body' => 'Hello '
    ];
   
    Mail::to($req->email)->send(new \App\Mail\MyTestMail($details));
   
    echo "Mail send";
    }
}
