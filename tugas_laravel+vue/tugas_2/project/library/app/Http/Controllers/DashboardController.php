<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Dashboard;
use App\Models\Book;
use App\Models\catalog;
use App\Models\member;
use App\Models\author;
use App\Models\publisher;
use App\Models\transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $total_buku = Book::count();
        $total_anggota = member::count();
        $total_penerbit = publisher::count();
        $total_transaksi = transaction::whereMonth('date_start', date('m'))->count();

        $data_chartdonat=Book::select(DB::raw("COUNT(publisher_id) as total"))->groupBy('publisher_id')->orderBy('publisher_id','asc')->pluck('total');
        $label_chartdonat=publisher::orderBy('publishers.id','asc')->join('books','books.publisher_id','=','publishers.id')->groupBy('name_p')->pluck('name_p');


        // return $data_chartdonat;
        // return $label_chartdonat;

        $label_bar = ['Start Transactions','End Transaction'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] =$key == 0 ? 'rgba(60,141,188,01)' : "rgba(210,214,222,1)";
            $data_bar[$key]['borderColor'] =$key == 0 ? 'rgba(60,141,188,0.8)' : "rgba(210,214,222,1)";
        // membuat data bulan
            $data_month = [];

        // range 1-12 bulan
            foreach (range(1,12) as $month){
                if($key == 0){
                    $data_month[]=transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
                }else{
                    $data_month[]=transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_end', $month)->first()->total;
                }
            }
        $data_bar[$key]['data'] = $data_month;
        
        }
        // return $data_bar;

        // return $data_month;

        $label_line = ['Book Qty > 15','Book Qty < 15 '];
        $data_line = [];

        foreach ($label_line as $key => $value) {
            $data_line[$key]['label'] = $label_line[$key];
            $data_line[$key]['backgroundColor'] =$key == 0 ? 'cyan' : "yellow";
            $data_line[$key]['borderColor'] =$key == 0 ? 'green' : "red";
   
            $data_year = [];

            foreach (range(2020,2024) as $year){
                if($key == 0){
                    $data_year[]=Book::select(DB::raw("COUNT(year) as total"))
                        ->where('year', $year)
                        ->where('qty','>', 15)->first()->total;
                }else{
                    $data_year[]=Book::select(DB::raw("COUNT(year) as total"))
                        ->where('year', $year)
                        ->where('qty','<', 15)->first()->total;
                }
            }
        $data_line[$key]['data'] = $data_year;
        
        }

       
       

        return view('admin.dashboard', compact('total_buku','total_anggota','total_penerbit','total_transaksi','data_chartdonat','label_chartdonat','data_bar','data_line'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
