<?php

namespace App\Http\Controllers;

use DB;
use App\Book;
use App\Catalog;
use App\Member;
use App\Publisher;
use App\Author;
use App\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $total_member = Member::count();
        $total_book = Book::count();
        $total_transaction = Transaction::whereMonth('tgl_pinjam', date('m'))->count();
        $total_publisher = Publisher::count();

        return $data_donat;

        $data_donut = Book::select(DB::raw("COUNT(id_publisher) as total"))->groubBy('id_publisher')->orderBy('id_publisher','asc')->pluck('total');
        $label_donut = Publisher::orderBy('publishers.id', 'asc')->join('books', 'books.id_publisher', '=', 'publishers.id')->groubBy('nama_publisher')->pluck('nama_publisher');

        $label_bar = ['Transaction', 'Pengembalian'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = $key == 0 ? 'rgba(60,141,188,0.9)' : 'rgba(210, 214, 222, 1)';
            $data_month = [];

            foreach (range(1,12) as $month) {
                if ($key == 0) {
                    $data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_pinjam', $month)->first()->total;
                } else {
                    $data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_kembali', $month)->first()->total;
                }
            }

            $data_bar[$key]['data'] = $data_month;
        }

        //return $data_bar;

        return view('admin.dashboard', compact('total_book', 'total_member', 'total_transaction', 'total_publisher', 'data_donut', 'label_donut', 'data_bar'));
    }

    public function catalog()
    {
        $data_catalog = catalog::all();

        return view('admin.catalog.catalog', compact('data_catalog'));
    }

    public function publisher()
    {
        return view('admin.publisher');
    }

    public function author()
    {
        return view('admin.author');
    }

    public function transaction()
    {
        if (auth()->user()->role('petugas')) {
            $data_book = Book::all();
            $data_member = Member::all();

            return view('admin.transaction', compact('data_member', 'data_book'));
        } else {
            return abort('403');
        }
    }

    public function book()
    {
        $data_book = Book::all();

        return view('admin.book.book', compact('data_book'));
    }

    public function member()
    {
        return view('admin.member');
    }

    public function test_spatie()
    {
        // $role = Role::create(['name' => 'petugas']);
        // $permission = Permission::create(['name' => 'index peminjaman']);

        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);

         $user = auth()->user();
        // $user = assignRole('petugas);

        // $user = User::with('roles')->get();
         return $user;

        // $user = auth()->user();
        // $user->removeRole('petugas');
    }
}
