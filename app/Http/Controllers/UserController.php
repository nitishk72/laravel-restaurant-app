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
        // $cart = new User();
        // $cart->name = request('name');
        // $cart->price = request('price');
        $cart = request('cartItem');
        $foodItems = Products::whereIn('id', $cart)->get();
        // return $foodItems;
        return view('customer.cart', ['carts'=>$foodItems] );
    }

    public function orders()
    {
        return view('customer.orders');
    }
}
