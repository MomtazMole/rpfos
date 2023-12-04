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
    public function menudelete($id){
        $Menu=Menu::find($id)->delete();
        return redirect()->back();
    }
    public function menuedit($id){
        $Menu=Menu::find($id);
        return view('backend.pages.menu.update', compact('Menu'));
    }
    public function menuupdate(Request $request, $id){
        $Menu=Menu::find($id);


        $file_name = $Menu->photo;
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }

        $Menu->update([
            'name'=>$request->food_name,
            'type'=>$request->food_type,
            'photo'=>$file_name,
        ]);
        return redirect()->route('Menu.list');
    }
    public function menuview($id){
        $Menu=Menu::find($id);
        return view('backend.pages.menu.view', compact('Menu'));
    }
}
