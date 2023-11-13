<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        //dd('hello');
        return view('backend.Pages.customer.list');
    }
    public function form()
    {
        // dd('hello');
        return view('backend.Pages.customer.form');
    }
    public function store(Request $request)
    {
    //dd($request->all());
        

        return redirect()->back();
    }
}


