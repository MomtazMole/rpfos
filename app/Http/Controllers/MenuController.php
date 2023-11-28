<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function list()
    {   $Menu=Menu::all();
        //dd('hello');
        return view('backend.Pages.menu.list', compact('Menu'));
    }
    public function form()
    {
        // dd('hello');
        return view('backend.Pages.menu.form');
    }
    public function store(Request $request)
    {
    //dd($request);
    $file_name = null;
    if ($request->hasfile('photo')) {
        $file = $request->file('photo');
        $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads/', $file_name);
    }

//dd($file_name);

   Menu::create([
        'name' => $request->food_name,
        'type' => $request->food_type,
        'Photo' => $file_name,
    ]);

         return redirect()->back();
    }
}
