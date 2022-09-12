<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Catalog;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

	public function home() {
        $total_books = Book::count();
		$total_members =Member::count();

		$total_transactions = Transaction::whereMonth('date_start', date('m'))->count();
		$total_publishers = Publisher::count();


		$data_donut = Book::select(DB::raw("COUNT(publisher_id) as total"))
					->groupBy('publisher_id')
					->orderBy('publisher_id', 'asc')
					->pluck('total');

		// return $data_donut;

		$label_donut = Publisher::orderBy('publishers.id', 'asc')
					->join('books', 'books.publisher_id', '=', 'publishers.id')
					->groupBy('publishers.name')
					->pluck('publishers.name');
					// return $label_donut;

		// Chart Pie
		$data_pie = Book::select('price')
					->groupBy('price')
					->orderBy('title', 'asc')
					->pluck('price');

		// return $data_pie;

		$label_pie = Book::orderBy('title', 'asc')
					->groupBy('title')
					->pluck('title');
					// return $label_pie;

		// Chart Bar
		$label_bar = ['Peminjaman', 'Pengembalian'];
		$data_bar = [];

		foreach ($label_bar as $key => $value) {
			$data_bar[$key]['label'] = $label_bar[$key];
			$data_bar[$key]['backgroundColor'] = $key == 0 ? 'rgba(60, 141, 188, 0.9)' : 'rgba(210, 214, 222, 1)';
			$data_month = [];

			foreach (range(1, 12) as $month) {
				if ($key == 0) {
					$data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))
					->whereMonth('date_start', $month)
					->first()
					->total;
				} else {
					$data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))
					->whereMonth('date_end', $month)
					->first()
					->total;
				}
			}
			$data_bar[$key]['data'] = $data_month;
		}
		// return $data_bar;
		return view('home', compact('total_members', 'total_books', 'total_transactions', 'total_publishers', 'data_donut', 'label_donut', 'data_pie', 'label_pie', 'data_bar', 'label_bar'));
	}

    public function index()
    {
// Script Eloquent Relationship Model
       // $members = Member::with('user')->get();
       // $books = Book::with('publisher')->get();
       // $publishers = Publisher::with('books')->get();
       // $authors = Author::with('books')->get();
       // $catalogs = Catalog::with('books')->get();
       // $transactions = Transaction::with('member')->get();
       // $transactions = Transaction::with('transaction_details')->get();
       // $transactiondetails = TransactionDetail::with('transaction')->get();
       // $transactiondetails = TransactionDetail::with('books')->get();

        // return $transactiondetails;

// Script Query Builder

        // Nomor 1
        $data1 = Member::select('*')
                    ->join('users', 'users.member_id', '=', 'members.id')
                    ->get();

        // nomor 2
        $data2 = Member::select('*')
                    ->leftJoin('users','users.member_id','=','members.id')
                    ->where('users.id', NULL)
                    ->get();

        // nomor 3
        $data3 = Member::select('*')
                    ->leftJoin('users','users.member_id','=','members.id')
                    ->where('users.id', NULL)
                    ->get();

        // nomor 4
        $data4 = Member::select('members.id', 'members.name', 'members.phone_number')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->orderBy('members.id', 'asc')
                    ->get();

        // nomor 5
        //$data5 = Transaction::select('members.id', 'members.name', 'members.phone_number')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->groupBy('transactions.member_id')
                    //->having('transactions.member_id', '>', 1)
                    //->get();

        // nomor 6
        //$data6 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->get();

        // nomor 7
        //$data7 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->whereMonth('date_end', '6')
                    //->get();

        // nomor 8
        //$data8 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->whereMonth('date_start', '5')
                    //->get();

        // nomor 9
        //$data9 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->whereMonth('date_start', '6')
                    //->whereMonth('date_end', '6')
                    //->get();

        // morno 10
        //$data10 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->where('address', 'like', '%Bandung%')
                    //->get();

        // nomor 11
        //$data11 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->where('gender', 'F')
                    //->where('address', 'like', '%Bandung%')
                    //->get();

        // nomor 12
        //$data12 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn')
                    //->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->join('books', 'transaction_details.book_id', '=', 'books.id')
                    //->where('transaction_details.qty', '>', 1)
                    //->get();

        // nomor 13
        //$data13 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'books.price', 'books.price * transaction_details.qty')
                    //->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
                    //->join('members', 'transaction.member_id', '=', 'members.id')
                    //->join('books', 'transaction_details.book_id', '=', 'books.id')
                    //->get();

        // nomor 14
        //$data14 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'publishers.name as publisher', 'authors.name as author', 'catalogs.name as catalog')
                    //->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
                    //->join('members', 'transactions.member_id', '=', 'members.id')
                    //->join('books', 'transaction_details.book_id', '=', 'books.id')
                    //->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                    //->join('authors', 'books.author_id', '=', 'authors.id')
                    //->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
                    //->get();

        // nomor 15
        //$data15 = Catalog::select('catalogs.*', 'books.title')
                    //->leftJoin('books', 'catalogs.id', '=', 'books.catalog_id')
                    //->get();

        // nomor 16
        //$data16 = Book::select('books.*', 'publishers.name')
                    //->leftJoin('publishers', 'publishers.id', '=', 'books.publisher_id')
                    //->get();

        // nomor 17
        //$data17 = Book::where('author_id', 5)
                    //->count();

        // nomor 18
        //$data18 = Book::select('*')->where('price', '>', '10000')
                    //->get();

        // nomor 19
        //$data19 = Book::select('*')
                    //->where('author_id', '=', 1)
                    //->where('qty', '>', '10')
                    //->get();

        // nomor 20
        //$data20 = Member::select('*')
                    //->whereMonth('created_at', '>=', '6')
                    //->get();


        //return $data20;
        return view('home');
        $all_members = Member::count();
        $all_books = Book::count();
        $all_transactions = Transaction::whereMonth('date_start', date('m'))->count();
        $all_publishers = Publisher::count();

        $label_donut = Publisher::orderBy('publisher_id')->join('books', 'books.publisher_id', 'publishers.id')->groupBy('publishers.name')->limit(5)->pluck('publishers.name');
        $data_donut = Book::select(DB::raw("COUNT(publisher_id) as total"))->groupBy('publisher_id')->orderBy('publisher_id')->limit(5)->pluck('total');

        $label_pie = Catalog::orderBy('catalog_id')->join('books', 'books.catalog_id', 'catalogs.id')->groupBy('catalogs.name')->pluck('catalogs.name');
        $data_pie = Book::select(DB::raw("COUNT(catalog_id) as total"))->groupBy('catalog_id')->orderBy('catalog_id')->pluck('total');

        // return $data_pie;


        $label_bar = ['Transactions'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = 'rgba(60, 141, 138, 0.9)';
            $data_month = [];

            foreach (range(1, 12) as $month) {
                $data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
            }

            $data_bar[$key]['data'] = $data_month;
        }


        //return view('admin.dashboard',compact('all_members','all_books','all_transactions','all_publishers','data_donut','label_donut','data_bar','label_pie','data_pie'));
    }
}
