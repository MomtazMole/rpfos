<?php

namespace App\Http\Controllers\frontend;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function registration(){
       //dd('mole');
       return view('frontend.pages.registration');
    }
   public function store(Request $request){
     //dd($request->all());
     $file_name = null;
     if ($request->hasfile('photo')) {
         $file = $request->file('photo');
         $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
         $file->storeAs('uploads/', $file_name);
     }
     User::create([
         'name' => $request->name,
         'role' => 'customer',
         'email' => $request->email,
         'photo' => $file_name,
         'password' => $request->password,
     ]);
    notify()->success('registration successful');
    return redirect()->route('front.home');
}
    public function logout(){
      auth()->logout();
      session()->forget('vcart');
      notify()->success('Successfully Logout');
      return redirect()->route('front.home');
    }
    public function profile(){
      return view('frontend.pages.profile.profile');
    }
}
