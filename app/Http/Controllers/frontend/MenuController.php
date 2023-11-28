<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        // dd('Hello Menu');
       $Menu=Menu::all();
        return view('frontend.pages.menu.menu', compact('Menu'));
    }
    
}