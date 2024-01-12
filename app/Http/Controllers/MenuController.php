<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function list()
    {
        $menu = Menu::with('category')->get();
        //dd('hello');
        return view('backend.Pages.menu.list', compact('menu'));
    }
    public function form()
    {
        // dd('hello');
        $category = Category::all();
        return view('backend.Pages.menu.form', compact('category'));
    }
    public function store(Request $request)
    {
        // dd($request);



        $file_name = null;
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }

        //dd($file_name);

        Menu::create([
            'Photo' => $file_name,
            'name' => $request->food_name,
            'category_id' => $request->food_type,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }



    public function menudelete($id)
    {
        $Menu = Menu::find($id)->delete();
        return redirect()->back();
    }
    
}
