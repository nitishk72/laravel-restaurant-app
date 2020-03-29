<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Orders;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $user = auth()->user();
        return view('customer.profile')->with('user', $user);
    }

    public function settings()
    {
        return view('customer.settings');
    }

    public function cart()
    {
        $cartItems = session('cart', []);
        $foodItems = Products::whereIn('id', $cartItems)->get();

        return view('customer.cart', ['carts' => $foodItems] );
    }

    public function doOrders()
    {
        $orders = new Orders();
        $orders->user = auth()->user()->id;
        $orders->status = 'PROCESSING';
        $orders->orders = json_encode(session('cart', []));
        $orders->save();
        
        session()->forget('cart');
        return view('customer.orders')->with('orders', $orders);
    }
}
