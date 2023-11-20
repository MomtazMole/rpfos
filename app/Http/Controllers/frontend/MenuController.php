<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        // dd('Hello Menu');
        return view('frontend.pages.menu.menu');
    }
}
