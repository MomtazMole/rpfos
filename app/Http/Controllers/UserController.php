<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('backend.pages.login');
    }

    public function loginPost(Request $request)
    {

         $val=Validator::make($request->all(),
         [
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

         if($val->fails())
         {
            //message
            return redirect()->back()->withErrors($val);
        }

        $credentials = $request->only('email', 'password');


        $login = auth()->attempt($credentials);
        if($login) {
            // dd('hello');
            return redirect()->route('home');
            
        } else{
            return redirect()->back();

        }
       
    
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('admin.login');
    }
}
