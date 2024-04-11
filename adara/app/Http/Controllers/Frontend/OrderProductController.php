<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use App\Models\OrderProduct;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderProductController extends Controller
{
    public function addCart ( Request $request){
        $client = Session::get('client');
          if($client){
       $product = Product::where('id' , $request->product_id)->first();
             OrderProduct::create([
                    'name' => $product->name,
                    'price' => $product->price,
                    'image' => $product->image,
                    'discount' => $product->discount,
                    'client_id' => $client->id,
                    'size_id' => $request->sizes,
                    'color_id' => $request->color_id,
                    'count' => $request->count,
             ]);
             $notification = array(
                'message' => 'Added cart successfully!',
                'alert-type' => 'success'
            );
            }else{
                $notification = array(
                    'message' => ' Message added successfully!',
                    'alert-type' => 'success'
                );
                 }
                 
               return redirect()->back()->with($notification);
    }

}
