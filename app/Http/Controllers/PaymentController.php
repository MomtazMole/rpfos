<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list()
    {
        //dd('hello');
        $payment=Order::all();
        return view('backend.Pages.payment.list',compact('payment'));
    }
   
    public function store(Request $request)
    {
    //dd($request->all());
        

        return redirect()->back();
    }
}
