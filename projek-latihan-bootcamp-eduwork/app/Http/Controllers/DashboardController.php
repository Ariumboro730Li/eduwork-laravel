<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function catalog()
    {
        return view('catalog');
    }
    public function writer()
    {
        return view('writer');
    }
    public function member()
    {
        return view('member');
    }
}
