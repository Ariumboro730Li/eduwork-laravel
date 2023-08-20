<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::withCount('books')->get();
        //return $catalogs;
        //dd($catalogs);
        return view('admin.catalog.index', compact('catalogs'));
    }

    // ... (metode lainnya)
}
