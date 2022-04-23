<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //     $this->middleware('auth');
        // ini_set("max_execution_time", 0);
        // ini_set("max_input_time", -1);
        // ini_set("memory_limit", -1);
        // set_time_limit(-1);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.home');
    }
}
