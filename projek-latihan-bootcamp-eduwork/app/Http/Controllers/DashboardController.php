<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function catalog()
    {
        $catalogs = Catalog::all();
        // return $catalog;
        return view('catalog', compact('catalogs'));
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
