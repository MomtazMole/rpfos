<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function registration(){
       //dd('mole');
       return view('frontend.pages.registration');
    }
   public function store(Request $request){
     //dd($request->all());


    //notify()->success('registration successful');
    return redirect()->back();
}
    public function logout(){
      auth()->logout();
      notify()->success('Logout Success');
      return redirect()->route('front.home');
    }
    public function profile(){
      return view('frontend.pages.profile.profile');
    }
}
