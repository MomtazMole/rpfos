<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        //dd('hello');
        $order=Order::all();
        return view('backend.Pages.order.list',compact('order'));
    }
    
    public function store(Request $request)
    {
    //dd($request->all());
        

        return redirect()->back();
    }
}
