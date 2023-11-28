<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

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

    public function admindelete($id){
        $admin=User::find($id)->delete();
        return redirect()->back();
    }
    public function adminedit($id){
        $admin=User::find($id);
        return view('backend.pages.admin.update', compact('admin'));
    }
    public function adminupdate(Request $request, $id){
        $admin=User::find($id);


        $file_name = $admin->photo;
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }

        $admin->update([
            'name'=>$request->user_name,
            'role'=>$request->role,
            'email'=>$request->email,
            'photo'=>$file_name,
            'password'=>$request->password,
        ]);
        return redirect()->route('Admin_List');
    }
    public function adminview($id){
        $admin=User::find($id);
        return view('backend.pages.admin.view', compact('admin'));
    }
}
