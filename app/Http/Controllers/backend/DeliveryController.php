<?php

namespace App\Http\Controllers\backend;
use App\Models\Delivery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function print()
    {
        $Delivery_data=Delivery::all();
        return view('backend.pages.Delivery.print',compact('Delivery_data'));
    }
    public function list(){
        $Delivery_data=Delivery::all();
        return view('backend.pages.Delivery.list',compact('Delivery_data'));
    }
    public function form(){
        return view('backend.pages.Delivery.Create');
    }
    public function store(Request $request){
        // dd($request);

        $file_name = null;
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $file_name);
        }

        Delivery::create([
            'name'=>$request->name,
            'role'=>'delivery_man',
            'address'=>$request->address,
            'photo'=> $file_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return redirect(Route('Delivery.man.list'));
    }

    public function delete($deliveryMan_id){
        Delivery::find($deliveryMan_id)->delete();
        return redirect()->back();
    }
}
