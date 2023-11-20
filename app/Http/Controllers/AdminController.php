<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        //dd('hello');
        $user_data = User::all();
        return view('backend.pages.admin.admin', compact('user_data'));
    }
    public function adminform()
    {
        //dd('hello');
        return view("backend.pages.admin.form");
    }
    public function adminstore(Request $request)
    {
        //dd($request->all());

        $file_name = null;
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }



        User::create([
            'name' => $request->user_name,
            'role' => $request->role,
            'email' => $request->email,
            'photo' => $file_name,
            'password' => $request->password,
        ]);

        return redirect()->back();
    }
}
