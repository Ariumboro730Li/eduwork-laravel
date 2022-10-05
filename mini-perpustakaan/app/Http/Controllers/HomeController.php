<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\Author;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        // return view('admin.dashboard.home');
        // $data = Publisher::with('book')->get();
        // $data = Book::with('publisher')->get();
        // $data = Author::with('books')->get();
        // return $data;
        $total_anggota = Member::count();
        $total_buku = Book::count();
        $total_peminjaman = Transaction::count();
        $total_penerbit = Publisher::count();

        $data_donat = Book::select(DB::raw("COUNT(publisher_id) as total"))->groupBy('publisher_id')->orderBy('publisher_id', 'asc')->pluck('total');
        $label_donat = Publisher::orderBy('publishers.id', 'asc')->join('books', 'books.publisher_id', '=', 'publishers.id')->groupBy('name')->pluck('name');

        $label_bar = ['Peminjaman', 'Pengembalian'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = $key == 0 ? '#2200ee' : '#9900aa';
            $data_month = [];

            foreach (range(1, 12) as $month) {
                if ($key == 0) {
                    $data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
                } else {
                    $data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_end', $month)->first()->total;
                }
            }

            $data_bar[$key]['data'] = $data_month;
        }

        $label_area = Author::orderBy('authors.id', 'asc')->join('books', 'books.author_id', '=', 'authors.id')->groupBy('name')->pluck('name');
        $data_area = Book::select(DB::raw("COUNT(author_id) as total"))->groupBy('author_id')->orderBy('author_id', 'asc')->pluck('total');

        // return $data_month;
        return view('admin.home', compact('total_anggota', 'total_buku', 'total_peminjaman', 'total_penerbit', 'data_donat', 'label_donat', 'data_bar', 'label_area', 'data_area'));
    }
}

