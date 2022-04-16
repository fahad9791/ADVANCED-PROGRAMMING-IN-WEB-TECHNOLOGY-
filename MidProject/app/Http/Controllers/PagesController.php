<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;

use Illuminate\Http\Request;
use App\Models\shop_registration;
use App\Models\product;
use App\Models\customer;
use App\Models\order;

class PagesController extends Controller
{
    public function registration(){
        return view('home.registration');
    }

    public function login(){
        return view('home.login');
    }

    public function registrationsubmit(Request $req){
        $req->validate(
            [
                'email'=>'required|email',
                'name'=>'required|regex:/^[A-Z a-z .]+$/',
                'password'=>'required|min:6',
                'cpassword'=>'same:password',
                'phone'=>'required|min:8|max:14',
                'sname'=>'required',
                'saddress'=>'required|min:20'

            ],
            [

                'email.required'=>'Please provide your Email',
                'name.required'=>'Please provide your Name',
                'password.required'=>'Please provide your Password',
                'cpassword.same'=>'The Confirm Password and Password must match.',
                'phone.required'=>'Please provide your Phone Number',
                'sname.required'=>'Please provide your Shop Name',
                'saddress.required'=>'Please provide your Shop Address',
                'saddress.min'=>'The address you provided is too short'
            ]
        );
        $flag = 1;

        $sr = shop_registration::all();
        //return $sr;
        foreach ($sr as $value) {
            if ($req->email == $value->email) {
                $flag = 0;
                $req->session()->flash('reg', 'This account already exists');
                return redirect()->route('registration');
            }
        }

         if ($flag == 1) {
            $sr = new shop_registration();
            $sr->email = $req->email;
            $sr->name = $req->name;
            $sr->password = md5($req->password);
            $sr->phone = $req->phone;
            $sr->shop_name = $req->sname;
            $sr->shop_address = $req->saddress;
            $sr->picture = 'user.png';
            $sr->save();

            $req->session()->flash('reg', 'Your account has been successfully registered ');
            return redirect()->route('login');
             
         }


        
    }

    public function loginsubmit(Request $req){
        $req->validate(
            [
                'email'=>'required|email',
                'password'=>'required|min:6'

            ],
            [

                'email.required'=>'Please provide your Email',
                'password.required'=>'Please provide your Password'
            ]
        );
        $flag = 0;

        $sr = shop_registration::all();
        //return $sr;
        foreach ($sr as $value) {
            if ($req->email == $value->email && md5($req->password) == $value->password) {
                $flag = 1;
                break;
            }
        }

         if ($flag == 1) {
            $req->session()->put('id', $value->id);
            $req->session()->put('email', $value->email);
            $req->session()->put('name', $value->name);
            $req->session()->put('password', $value->password);
            $req->session()->put('phone', $value->phone);
            $req->session()->put('shop_name', $value->shop_name);
            $req->session()->put('shop_address', $value->shop_address);
            $req->session()->put('picture', $value->picture);

            $req->session()->flash('login', 'You have successfully logged in ');
            return redirect()->route('dashboard');
             
         }
         else{

            $req->session()->flash('invalid', 'Invalid Email & Password');
            return redirect()->route('login');
         }


        
    }

    public function logout(){

        session()->flush();
        return redirect()->route('login');
    }

    public function mail(){

        $details = [
        'title' => 'Mail from fahad',
        'body' => 'Hello '
    ];
   
    Mail::to('shahriarfarabi1998@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    echo "Mail send";
    }
}
