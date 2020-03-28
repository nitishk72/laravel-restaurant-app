<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin');
    }
}
