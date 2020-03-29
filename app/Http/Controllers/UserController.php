<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('customer.profile');
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

    public function orders()
    {
        return view('customer.orders');
    }
}
