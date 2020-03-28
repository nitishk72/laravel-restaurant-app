<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        return view('admin');
    }

    public function admin()
    {
        return view('admin');
    }

    public function logout(){
        return view('admin');

    }
    
    public function settings(){
        return view('settings');

    }

    public function products(){
        return view('products');

    }
}
