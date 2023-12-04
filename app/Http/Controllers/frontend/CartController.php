<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartview()
    {
        return view('frontend.pages.cart.cartview');
    }
    public function viewdetails($id)
    {
        //dd('fgfh');
        $menu = Menu::find($id);
        return view('frontend.pages.viewdetails.viewdetails', compact('menu'));
    }
    public function addtoorder(Request $request,$id)
    {
        $menu=Menu::find($id);

        $cart=session()->get('vcart');
        if($cart){//not empty

            if(array_key_exists($id,$cart)){//yes
                //qty update
                $cart[$id]['quantity']=$cart[$id]['quantity'] + 1;
                $cart[$id]['subtotal']=$cart[$id]['quantity'] * $cart[$id]['price'];

            session()->put('vcart',$cart);
            notify()->success('Quantity updated.');
            return redirect()->back();


            }else{//no
                //add to cart
                $cart[$id]=[
                    'id'=>$id,
                    'name'=>$menu->name,
                    'price'=>$menu->price,
                    'type'=>$menu->type,
                    'quantity'=>1,
                    'subtotal'=>1 * $menu->price,
            ];

            session()->put('vcart',$cart);
            notify()->success('Order added to cart successfully.');
            return redirect()->back();

            }

            return redirect()->back();

        }else{//empty
            //add to cart
            $newCart[$id]=[
                    'id'=>$id,
                    'name'=>$menu->name,
                    'price'=>$menu->price,
                    'quantity'=>1,
                    'subtotal'=>1 * $menu->price,
            ];

            session()->put('vcart',$newCart);
            notify()->success('Order added to cart successfully.');
            return redirect()->back();

        }



        return view('frontend.pages.cartview.cartview');
    }
    public function checkout(){
        return view('frontend.pages.cart.checkout');
    }
    public function orderPlace(Request $request){
        // dd($request->all());
    
            $cart=session()->get('vcart')
    
            $order=Order::create([
                'user_id'=>auth()->user()->id,
                'menu_id'=>$menu_id,
                'status'=>'pending',
                'total_price'=>array_sum(array_column($cart,'subtotal')),
                'address'=>$request->address,
                'receiver_mobile'=>$request->phone_number,
                'receiver_name'=>$request->name,
                'receiver_email'=>$request->email_address,
 
            ]);
    
            // dd($cart);
            //create order details
            foreach($cart as $key=> $item)
            {
                OrderDetails::create([
                    'order_id'=>$order->id,
                    // 'product_id'=>$key,
                    'product_id'=>$item['id'],
                    'quantity'=>$item['quantity'],
                    'subtotal'=>$item['subtotal'],
                ]);
            }
    
            session()->forget('vcart');
            notify()->success('Order placed success.');
            return redirect()->back();
       
    }
}
