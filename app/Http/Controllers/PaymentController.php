<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list()
    {
        //dd('hello');
        return view('backend.Pages.payment.list');
    }
    public function form()
    {
        // dd('hello');
        return view('backend.Pages.payment.form');
    }
    public function store(Request $request)
    {
    //dd($request->all());
        

        return redirect()->back();
    }
}
