<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop_registration;
use App\Models\product;
use App\Models\customer;
use App\Models\order;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.user');
    }

    public function dashboard(){
        return view('shop.dashboard');
    }

    public function view_profile(Request $req){
        // $value = session()->get('id');
        // $view = shop_registration::where('id', $value)
        // ->first();
        // //return $view;


        return view('shop.view_profile');
    }
    public function edit_profile(){
        return view('shop.edit_profile');
    }

    public function order(){

        $pro = product::all();
        return $pro->customer;
        return view('shop.order');
    }
    public function change_password(){
        return view('shop.change_password');
    }
    public function change_picture(){
        return view('shop.change_picture');
    }

    public function editsubmit(Request $req){

        $req->validate(
            [
                'name'=>'required|regex:/^[A-Z a-z .]+$/',
                'phone'=>'required|min:8|max:14',
                'sname'=>'required',
                'saddress'=>'required|min:20'

            ],
            [
                'name.required'=>'Please provide your Name',
                'phone.required'=>'Please provide your Phone Number',
                'sname.required'=>'Please provide your Shop Name',
                'saddress.required'=>'Please provide your Shop Address',
                'saddress.min'=>'The address you provided is too short'
            ]
        );

        $value = session()->get('id');
        $sr = shop_registration::where('id', $value)
        ->first();
        //return $sr;

        $sr->name = $req->name;
        $sr->phone = $req->phone;
        $sr->shop_name = $req->sname;
        $sr->shop_address = $req->saddress;
        $sr->save();

        $req->session()->put('name', $req->name);
        $req->session()->put('phone', $req->phone);
        $req->session()->put('shop_name', $req->sname);
        $req->session()->put('shop_address', $req->saddress);

        $req->session()->flash('update_profile', 'You have successfully Update your profile');

        return redirect()->route('view_profile');



    }

    public function change_passwordsubmit(Request $req){

        $req->validate(
            [
                'password'=>'required|min:6',
                'npassword'=>'required|min:6',
                'cpassword'=>'same:npassword'

            ],
            [
                'password.required'=>'Provide your Current Password',
                'npassword.required'=>'Provide your New Password',
                'cpassword.same'=>'The Confirm Password and Password must match.'
            ]
        );

        $value = session()->get('id');
        $password = session()->get('password');
        $sr = shop_registration::where('id', $value)
        ->first();

        //return $sr->password;

        if (md5($req->password) == $sr->password ) {
            //echo "success";
            if ($req->password != $req->npassword) {
                //echo "success";
                $sr->password = md5($req->npassword);
                $sr->save();
                $req->session()->flash('change_password_success', 'Password has been successfully changed');
            }else{
                //echo "failed";
                $req->session()->flash('change_password_fail', 'New password must be different from the old password');
            }
        }
        else{
            //echo "failed";
            $req->session()->flash('change_password_fail', 'You entered a wrong password');
        }

        return redirect()->route('change_password');
    }
    public function change_picturesubmit(Request $req){

        $req->validate(
            [
                'pro_pic'=>'required|mimes:png,jpg'

            ],
            [
                'pro_pic.required'=>'Please select a picture'
            ]
        );

        
        $file_name = $req->file('pro_pic')->getClientOriginalName();
        //$f_name = $file_name.'.'.$req->file('pro_pic')->getClientOriginalExtension();
        $folder = $req->file('pro_pic')->move(public_path('img').'/',$file_name);
        //$name = $req->file('pro_pic')->storeAs($folder, $f_name);

        $value = session()->get('id');
        $sr = shop_registration::where('id', $value)
        ->first();
        $sr->picture = $file_name;
        $sr->save();
        $req->session()->put('picture', $file_name);


        $req->session()->flash('change_picture', 'Profile picture uploaded successfully');
        
        return redirect()->route('view_profile');
    }
}
