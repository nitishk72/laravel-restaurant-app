<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function products()
    {
        return view('admin');
    }

    public function product($id)
    {
        // filter those products where foodType = id
        $foodItems = [
           [ 'name'=>'hi', 'price'=>67.5 ],
           [ 'name'=>'hi', 'price'=>67.5 ],
           [ 'name'=>'hi', 'price'=>67.5 ],
        ];
        // return view('customer.products', [ 'foodItems'=>$foodItems ]);
        return view('customer.products',  [ 'foodItems' => $foodItems ]);
    }
}
