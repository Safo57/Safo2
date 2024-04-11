<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Main;
use App\Models\Client;
use App\Models\Review;
use App\Models\Ads;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function mainPage()
    {
        $client = Session::get('client');
        $settings = Main::first();
        $ads = Ads::get();
        $news = Category::get();
        $products = Product::get();
        $offers = Offer::get();
        $categories = Category::get();
        $partners = Partner::get();
        $carts = Cart::query();
        if($client){
            $carts = $carts->where('client_id', $client->id)->get();
        }else {
            $carts = [];
        }
        return view('frontend/main', compact('settings', 'ads', 'news', 'partners', 'products','carts', 'categories', 'offers'));
    }
    // public function mainPage()
    // {

    //     $settings = Main::first();
    //     $offers = Offer::get();

    //     $products = Product::get();
    //     $client = Client::get();
    //     $client = Session::get('client');
    //     $cart = Cart::with('product', 'color', 'size');
    //     $cart = Cart::query();
    //     $cart = Cart::query();
    //     if ($client) {
    //         $cart = $cart->where('client_id' , $client->id)->where('product_id', $product_id)->first();
    //         $carts = Cart::where('client_id', $client->id)->get();
    //     } else {
    //         $cart = null;
    //         $cart = [];
    //     }
    //     $news = Category::get();
    //     $partners = Partner::get();
    //     $reviews = Review::get();
    //     $ads = Ads::get();

    //     return view('frontend.main', compact('settings', 'carts', 'cart', 'offers', 'products', 'news', 'reviews', 'client', 'partners', 'ads'));
    // }
    public function shopDetailPage($product_id)
    {
        $client = Session::get('client');
        $products = Product::where('id', $product_id)->with("category", "sizes", "images", "reviews")->first();
        $cart = Cart::query();
        $cart = Cart::query();
        if ($client) {
            $cart = $cart->where('client_id', $client->id)->where('product_id', $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        $product = Product::get();
        $product = $product->shuffle()->take(5);
        $settings = Main::first();
        $product_ids = Product::get();

        return view('frontend.shop-details', compact('cart', 'carts',  'products',  'product', 'settings',  'product_ids'));
    }

    public function cartPage()
    {
        $settings = Main::first();
        $client = Session::get('client');
        $carts = Cart::with('product', 'color', 'size');
        $cart = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::with('product', 'color', 'size')->where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        // echo "<pre>";
        // print_r($carts);
        // echo "</pre>";
        return view('frontend.cart', compact('carts', 'client', 'settings'));
    }
    public function ordersPage()
    {
        $settings = Main::first();
        $client = Session::get('client');
        $carts = Order::with('product', 'color', 'size');
        $carts = Order::query();
        $carts = Order::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Order::where('client_id', $client->id)->with('products')->get();
        } else {
            $carts = null;
            $carts = [];
        }
        return view('frontend.orders', compact('carts', 'client', 'settings'));
    }

    public function contactPage()
    {
        $settings = Main::first();
        $client = Session::get('client');
        $orders = Cart::with('product', 'color', 'size');
        $orders = Cart::query();
        $orders = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Cart::where('client_id', $client->id)->get();
        } else {
            $orders = null;
            $orders = [];
        }

        return view('frontend.contact', compact('client', 'orders', 'settings'));
    }
    public function  shopPage(Request $request)
    {
        $settings = Main::first();
        $client = Session::get('client');
        $carts = Cart::with('product', 'color', 'size');
        $carts = Cart::query();
        $carts = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = Cart::where('client_id', $client->id)->get();
        } else {
            $carts = null;
            $carts = [];
        }

        $query = $request->get('query');
        if(isset($query)){
            $products = Product::where('name', 'LIKE', "%$query%")->inRandomOrder()->get();
        } else {
            $products = Product::inRandomOrder()->get();
        }
        return view('frontend.shop', compact('settings', 'client', 'carts', 'products'));
    }
    public function aboutPage()
    {
        $settings = Main::first();
        $client = Session::get('client');
        $orders = Cart::with('product', 'color', 'size');
        $orders = Cart::query();
        $orders = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Cart::where('client_id', $client->id)->get();
        } else {
            $orders = null;
            $orders = [];
        }

        $products = Product::get()->shuffle()->take(8);
        return view('frontend.about', compact('settings', 'orders', 'products', 'client'));
    }
    // public function shopSidebarPage()
    // {
    //     $settings = Main::first();
    //     $client = Session::get('client');
    //     $orders = Cart::with('product ', 'color', 'size');
    //     $orders = Cart::query();
    //     $orders = Cart::query();
    //     if ($client) {
    //         // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
    //         $orders = Cart::where('client_id', $client->id)->get();
    //     } else {
    //         $orders = null;
    //         $orders = [];
    //     }
    //     $products = Product::get()->shuffle()->take(8);
    //     return view('frontend.shop-sidebar', compact('settings', 'orders', 'products', 'client'));
    // }
    public function wishPage()
    {
        $settings = Main::first();
        $product = Product::get();
        $client = Session::get('client');
        $wishs = Wish::with('product', 'color', 'size')->get();
        $wish = Wish::query();
        if ($client) {
            $wish = $wish->where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $wish = [];
        }
        $carts = Cart::with('product', 'color', 'size');
        $cart = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $carts = $carts->where('client_id', $client->id)->get();
        } else {
            $cart = null;
            $carts = [];
        }
        return view('frontend.wish', compact('client', 'settings', 'product', 'wishs', 'carts'));
    }
    public function blogPage()
    {
        $settings = Main::first();
        $client = Session::get('client');
        $orders = Cart::with('product', 'color', 'size');
        $orders = Cart::query();
        $orders = Cart::query();
        if ($client) {
            // $cart = $cart->where('client_id' , $client->id)->where('product_id' , $product_id)->first();
            $orders = Cart::where('client_id', $client->id)->get();
        } else {
            $orders = null;
            $orders = [];
        }

        $products = Product::get()->shuffle()->take(8);
        return view('frontend.blog', compact('settings',  'client', 'orders', 'products'));
    }
}
