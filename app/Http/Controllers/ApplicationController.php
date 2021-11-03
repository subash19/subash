<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function contacts()
    {
        return view('lakpa');
    }
    public function contactme(Request $request)
    
    {
        $this->validate($request,[
            'username'=>'required|min:4',
            'email'=>'required|email'
        ]);
      echo $name=$request->username;
       echo $email=$request->email;
        
    }
}
