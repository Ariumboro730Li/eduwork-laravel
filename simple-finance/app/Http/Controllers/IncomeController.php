<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Validator;

class IncomeController extends Controller
{
    public function index(){
        return view("contents.income.index");
    }

    public function noAjax(){
        $data = Income::all();
        return view("contents.income.index-no-ajax")->with("data", $data);
    }

    public function dataTable(){
        $data = Income::whereNotNull("id")->orderBy("id", "desc")->get();
        return DataTables::of($data)
        ->editColumn('category', function($data){
            return $data->category->name;
        })
        ->addColumn('action', function($data){
            return '
                <a name="" id="" class="btn btn-sm btn-danger" href="#" role="button"> <i class="ni ni-scissors"></i></a>
                <a name="" id="" class="btn btn-sm btn-primary" href="#" role="button"><i class="ni ni-caps-small"></i></a>
            ';
        })
        ->rawColumns(["category", "action"])
        ->addIndexColumn()
        ->toJson();
    }

    public function getString(){
        return Str::random(100);
    }

    public function store(request $request){
        $validator = Validator::make($request->all(), [
            "category_id" => 'required|integer',
            "total" =>  'required|integer',
        ]);
        if (!$validator->fails()) {
            Income::create($request->all());
            return response([
                "message" => "New Income Added Successfully"
            ], 200);
        } else {
            return response([
                "message" => $validator->errors()
            ], 400);
        }
    }

    public function getCategory(){
        $category = Category::select("id", "name")->whereIn("is_income", [1,2])->get();
        return $category;
    }
}
