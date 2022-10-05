<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    //
    public function show()
    {
        // return view('admin.layouts.app');
        return view('admin.layouts.template');
    }
}
