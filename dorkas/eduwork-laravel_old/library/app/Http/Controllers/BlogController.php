<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
		return view('home');
	}

	public function login.blade(){
		return view('login.blade');
	}

	public function recover-password.blade(){
		return view('recover-password.blade');
	}
    public function password.request(){
		return view('password.request');
	}
}
