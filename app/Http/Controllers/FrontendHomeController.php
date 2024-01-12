<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendHomeController extends Controller
{
    public function home()
    {
        //dd('hello');
        $category=Category::all();
        return view('frontend.pages.home.home',compact('category'));
    }
    public function loginForm()
    {
        return view('frontend.pages.login');
    }
    public function loginPostt(Request $request)
    {

         $val=Validator::make($request->all(),
         [
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

         if($val->fails())
         {
            return redirect()->back()->withErrors($val);
        }
        $credentials = $request->only('email', 'password');
        $login = auth()->attempt($credentials);
        if($login) {
             //dd('hello');
            return redirect()->route('front.home');
            
        } else{
            return redirect()->back();

        }
        
       
    }
    public function about()
    {
        //dd('hello');
        return view('frontend.pages.home.about');
    }
    public function contact()
    {
        //dd('contact');
        return view('frontend.pages.home.contact');
    }
    public function aboutus()
    {
        //dd('aboutus');
        return view('frontend.pages.home.aboutus');
    }
    
}