<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Menu;
use App\Models\Order;
use App\Models\Orderdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;

class CartController extends Controller
{
    public function cartview()
    {
        return view('frontend.pages.cart.cartview');
    }


    public function fresh_cart(){
        $cart=session()->get('vcart');
        if($cart){
            session()->forget('vcart');
        }
        return redirect()->back();
    }


    public function viewdetails($id)
    {
        //dd('fgfh');
        $menu = Menu::find($id);
        return view('frontend.pages.viewdetails.viewdetails', compact('menu'));
    }
    public function addtoorder(Request $request, $id)
    {
        $menu = Menu::find($id);

        $cart = session()->get('vcart');
        if ($cart) { //not empty

            if (array_key_exists($id, $cart)) { //yes
                //qty update
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
                $cart[$id]['subtotal'] = $cart[$id]['quantity'] * $cart[$id]['price'];

                session()->put('vcart', $cart);
                notify()->success('Quantity has been updated.');
                return redirect()->back();
            } else { //no
                //add to cart
                $cart[$id] = [
                    'id' => $id,
                    'name' => $menu->name,
                    'price' => $menu->price,
                    'type' => $menu->type,
                    'quantity' => 1,
                    'subtotal' => 1 * $menu->price,
                ];

                session()->put('vcart', $cart);
                notify()->success('Order added to cart successfully.');
                return redirect()->back();
            }
            return redirect()->back();
        } else {
            $newCart[$id] = [
                'id' => $id,
                'name' => $menu->name,
                'price' => $menu->price,
                'quantity' => 1,
                'subtotal' => 1 * $menu->price,
            ];

            session()->put('vcart', $newCart);
            notify()->success('Order added to cart successfully.');
            return redirect()->back();
        }



        return view('frontend.pages.cartview.cartview');
    }
    public function checkout()
    {
        return view('frontend.pages.cart.checkout');
    }

    public function orderPlace(Request $request)
    {
        // dd($request);
        $total = array_sum(array_column(session()->get('vcart'), 'subtotal'));
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'order_note' => $request->order_note,
            'total_price' => $total,
            'payment_method' => $request->payment_method,
        ]);
        //dd($request);
        $cart = session()->get('vcart');
        foreach ($cart as $item)
            Orderdetails::create([
                'order_id' => $order->id,
                'menu_id' => $item['id'],
                'quantity' => $item['quantity'],
                'subtotal' => $item['subtotal'],
            ]);
        // dd($request);
        session()->forget('vcart');
        $this->payment($order);
        return redirect()->route('front.home');
    }
    public function payment($payment)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        // dd($payment);
        $post_data = array();
        $post_data['total_amount'] = (int)$payment->total_price; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";



        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }
}
