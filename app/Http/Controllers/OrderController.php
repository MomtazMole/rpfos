<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        //dd('hello');
        return view('backend.Pages.order.list');
    }
    public function form()
    {
        // dd('hello');
        return view('backend.Pages.order.form');
    }
    public function store(Request $request)
    {
    //dd($request->all());
        

        return redirect()->back();
    }
}
