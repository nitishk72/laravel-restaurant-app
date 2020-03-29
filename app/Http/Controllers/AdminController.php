<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function create()
    {
        $food = new Products();
        $food->name = request('name');
        $food->type = request('type');
        $food->price = request('price');
        // return $food;
        $food->save();
        return redirect('/admin')->with('mssg', "Product added!");
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
}
