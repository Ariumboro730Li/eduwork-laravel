<?php

namespace App\Http\Controllers\SimpleFinance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Income;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IncomeController extends Controller
{
    public function index(){
        return view("pages_sf.incomes.index");
    }

    public function add(){
        return view("pages_sf.incomes.add");
    }

    public function create(request $request){
        Income::create([
            "total" => $request->total,
            "category" => $request->category,
        ]);
        return redirect("income");
    }

    public function edit(request $request){
        Income::where("id", $request->id)->update([
            "total" => $request->total,
            "category" => $request->category,
        ]);
        return redirect("income");
    }

    public function graph(){
        $data = Income::select("category", DB::raw("count(*) as jml_data"), DB::raw("sum(total) as total"))
        ->groupBy("category");

        foreach ($data->get() as $key => $value) {
            $results[] =[
                "name" => $value->category,
                "y" => (int)$value->total / 1000
            ];
        }

        return $results;
    }

    public function dataTable(){
        $category = \request()->input("category");
        $data = Income::orderBy("id", "desc");
        if ($category) {
            $data->where("category", $category);
        }
        return DataTables::of($data)
        //->editColumn('created_at', function($data) {
        //    return $data->created_at->format("Y-m-d H:i:s");
        // })
        //->editColumn('updated_at', function($data) {
        //    return $data->updated_at->format("Y-m-d H:i:s");
        // })
        ->editColumn('total', function($data) {
            return number_format($data->total);
        })
        ->editColumn('action', function($data) {
            ## Action without AJAX
            // return '
            //     <a name="" id="" class="btn btn-sm btn-danger" href="'.url("income/data-table/delete?id=$data->id").'" role="button"><i class="material-icons">delete_forever</i></a>
            //     <a name="" id="" class="btn btn-sm btn-primary" href="'.url("income/data-table/edit?id=$data->id").'" role="button"><i class="material-icons">question_mark</i></a>
            // ';

            ## Action dengan AJAX
            return '
                <a name="" id="delete_row" accessKey="'.$data->id.'" class="btn btn-sm btn-danger" href="javascript:void(0)" role="button"><i class="material-icons">delete_forever</i></a>
                <a name="" id="edit_row" accessKey="'.$data->id.'"  class="btn btn-sm btn-primary" href="javascript:void(0)" role="button"><i class="material-icons">question_mark</i></a>
            ';
        })
        ->rawColumns(["action"])
        ->make(true);
    }

    public function dataTableDelete(request $request){
        try {
            Income::where("id", $request->id)->delete();
            return response([
                "success" => true,
                "id" => $request->id,
                "message" => "Delete id $request->id is success"
            ], 200);
        } catch (\Throwable $th) {
            return response([
                "success" => false,
                "message" => [$th->getMessage()]
            ], 400);
        }
    }

    public function dataTableEdit(request $request){
        $data = Income::where("id", $request->id)->first();
        return $data ?? ["No Data"];
        // return view("pages_sf.incomes.edit")->with("data", $data);
    }

    public function addAjax(request $request){
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'total' => 'required',
            'category' => 'required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->all();
            return response(["message" => $error], 400);
        }
        Income::create([
            "total" => $request->total,
            "category" => $request->category,
        ]);
        return response(["message" => ["Add Income Successfully"]], 200);
    }

    public function editAjax(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'total' => 'required',
            'category' => 'required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->all();
            return response(["message" => $error], 400);
        }
        Income::where("id", $request->id)->update([
            "total" => $request->total,
            "category" => $request->category,
        ]);
        return response(["message" => ["Edit Income Successfully"]], 200);
    }
}
