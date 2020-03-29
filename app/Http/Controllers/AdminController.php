<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Orders;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('is_admin');
    // }

    public function index()
    {
        // $food = Products::where('type', 'Lunch')->get();
        $food = Products::all();
        // return $food;
        return view('admin.home', ['products'=>$food]);
    }


    public function add()
    {
        return view("admin.products.add");
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
        ]);

        $food = new Products();
        $food->name = $request->input('name');
        $food->type = $request->input('type');
        $food->price = $request->input('price');
        $food->save();
        return redirect('/admin')->with('mssg', "Product added!");
    }
    
    public function view($id)
    {
        $product = Products::find($id);
        return view('admin.products.view')->with('product', $product);
    }

    public function remove($id)
    {
        Products::findOrFail($id)->delete();
        return redirect('/admin')->with('mssg-dlt', "Product Deleted!");
    }

    public function update($id)
    {
        $product = Products::find($id);
        return view("admin.products.edit",)->with('product', $product);
    }
    public function doUpdate($id){

        Products::find($id)->update(request()->except('_token'));
        return redirect('/admin');
    }

    public function admin()
    {
        return view('admin');
    }

    public function logout(){
        return view('admin');

    }
    
    public function settings(){
        return view('admin.settings');

    }

    public function products(){
        return view('admin.products');

    }


    public function viewOrders(){
        $orders  = Orders::all();
        return view('admin.orders')->with('orders', $orders);;

    }



    public function approveOrder($id){
        $orders  = Orders::findOrFail($id)->update(['status' => 'Approved']);
        return back()->with('message', 'Approved');

    }



    public function cancelOrder($id){
        $orders  = Orders::findOrFail($id)->update(['status' => 'Canceled']);
        return back()->with('message', 'Canceled');

    }
}
