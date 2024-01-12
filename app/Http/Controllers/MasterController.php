<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function home()
    {
        $order=Order::with('user')->paginate(10);
        $orders=Order::all()->count();
        $menu=Menu::all()->count();
        $user=Admin::all()->count();
        return view('backend.pages.admin.homeadmin',compact('order','orders','menu','user',));
    }
}
