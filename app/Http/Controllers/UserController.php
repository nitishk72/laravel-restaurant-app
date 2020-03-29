<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function profile()
    {
        return view('customer.profile');
    }

    public function settings()
    {
        return view('customer.settings');
    }

    public function orders()
    {
        // $cart = new User();
        // $cart->name = request('name');
        // $cart->price = request('price');
        $cart = request('cartItem');
        return $cart;
        // return view('customer.orders');
    }

    public function cart()
    {
        return view('customer.cart');
    }
}
