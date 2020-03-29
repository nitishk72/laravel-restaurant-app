<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function products()
    {
        return view('admin');
    }

    public function product($id)
    {
        // filter those products where foodType = id
        $foodItems = Products::where('type', $id)->get();
        // return view('customer.products', [ 'foodItems'=>$foodItems ]);
        // return $foodItems;
        return view('customer.products',  [ 'foodItems' => $foodItems ]);
    }
}
