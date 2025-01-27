<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Main;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function viewCheckout(){
        $settings = Main::first();
        $client = Session::get('client');
        $carts = Cart::with('product', 'color', 'size');
        if($client){
            $carts = $carts->where('client_id' , $client->id)->get();
        }else{
            $carts= $carts->get();
        }
            return view("frontend.checkout" , compact( 'carts' ,'client' , 'settings'));
    }
    // add Order
   public function addOrder(Request $request){
    $client = Session::get('client');
      if($client){
        $carts = Cart::where('client_id' , $client->id)->get();
        $total_sum = null;
        foreach ($carts as $cart) {
             $total_sum += ($cart->price - ($cart->price * ($cart->discount / 100))) *  $cart->count;
        }
       $order = Order::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'image' => $request->image,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state,
            'zip' => $request->zip,
            'cardName' => $request->cardName,
            'cardNumber' => $request->cardNumber,
            'cardExpiration' => $request->cardExpiration,
            'client_id' => $client->id,
            'total_sum' => $total_sum,

         ]);

 foreach ($carts as $cart) {
           OrderProduct::create([
        'product_id' => $cart->product_id,
        'order_id' => $order->id,
        'name' => $cart->name,
        'price' => ($cart->price - ($cart->price * ($cart->discount / 100))) *  $cart->count ,
        'image' => $cart->image,
        'discount' => $cart->discount,
        'client_id' => $cart->client_id,
        'size_id' => $cart->sizes,
        'color_id' => $cart->color_id,
        'count' => $cart->count,
 ]);
 $cart->delete();
}
         $notification = array(
            'message' => 'Added order successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('cart.page')->with($notification);
        }else{
            $notification = array(
                'message' => 'You are not log inned!',
                'alert-type' => 'warning'
            );
             }

     return redirect()->back()->with($notification);
}

   public function deleteOrder($id){
    $client = session('client');
      $order = Order::where('id' , $id)->first();
      if($order){
        $order->delete();
        $notification = array(
            'message' => 'Delete successfully!',
            'alert-type' => 'success'
        );
      }else{
        $notification = array(
            'message' => 'Delete  successfully!',
            'alert-type' => 'warning'
        );
      }
    return redirect()->back()->with($notification);
   }
}
