<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function home()
    {
        $order=Order::paginate(10);
        return view('backend.pages.admin.homeadmin',compact('order'));
    }
}
