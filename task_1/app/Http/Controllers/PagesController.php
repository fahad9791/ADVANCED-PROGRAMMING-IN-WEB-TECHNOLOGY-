<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){

        $course1 = array 
        (
            "course" => "Programming With Python",
            "instructor" => "Mr. David",
            "duration" => "4 Months",
            "starts" => "10th February 2022"
        );
        $course1 = (object) $course1;
        return view('home.home')->with('course1', $course1);

    }
    public function login(){
        return view('home.login');
    }
    public function contact(){

        $con = array 
        (
            "name" => "Tanvir Ahmed",
            "position" => "Developer",
            "email" => "t.a@st.edu"
        );
        $con = (object) $con;
        return view('home.contact')->with('con', $con);;
    }
}
