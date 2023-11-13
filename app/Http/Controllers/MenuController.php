<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function list()
    {
        //dd('hello');
        return view('backend.Pages.menu.list');
    }
    public function form()
    {
        // dd('hello');
        return view('backend.Pages.menu.form');
    }
    public function store(Request $request)
    {
    //dd($request->all());
        

        return redirect()->back();
    }
}
