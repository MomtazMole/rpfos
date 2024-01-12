<?php

namespace App\Http\Controllers;

use App\Http\Controllers\backend\DeliveryController;
use App\Models\Delivery;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        //dd('hello');
        $order=Order::all();
        return view('backend.Pages.order.list',compact('order'));
        // $deliveryman = Delivery::all();    
        // $order_data= Order::with('deliver')->get();
        // // dd($order_data);
        // return view('admin.pages.order.list',compact('order_data','deliveryman'));
    }
    
    public function store(Request $request)
    {
    //dd($request->all());
        

        return redirect()->back();
    }
}
