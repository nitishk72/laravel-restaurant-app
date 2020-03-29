<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Orders;

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

    public function addCart(Request $request){
        $cartItem =  $request->all()['cartItem'] ?? [];
        foreach($cartItem as $item){
            session()->push('cart', $item);
        }
        return back()->with('message', 'Added to Cart');
    }


    public function orderHistory(){
        $user = ''.auth()->user()->id;
        $orders = Orders::where('user', '=', $user)->get();
        return view('customer.history')->with('orders', $orders);
    }

    public function viewOrder($id){
        $order = Orders::find($id);
        $foodItems = Products::whereIn('id',json_decode( $order['orders']))->get();
        return view('customer.vieworder')->with('items', $foodItems)->with('order', $order);
    }
}
