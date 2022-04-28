<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    //
    public function index()
    {
        // Nomor 1
        $roleAdmin = DB::table('anggota')->where('role', '=', 'admin')->get();
        // Nomor 2
        $notEqualAdmin = DB::table('anggota')->where('role', '!=', 'admin')->get();
        // Nomor 3
        $idMemberBelumPinjam = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'anggota.id_anggota', '=', 'detail_peminjaman.id_pinjam')
            ->where('qty', '=', 0)->get();
        // Nomor 4
        $idMemberPernahPinjam = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'anggota.id_anggota', '=', 'detail_peminjaman.id_pinjam')
            ->where('qty', '>', 0)->get();
        // Nomor 5
        $idMemberPinjamLebihDariSatu =  DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'anggota.id_anggota', '=', 'detail_peminjaman.id_pinjam')
            ->where('qty', '>=', 1)->get();
        // Nomor 6
        $namaMemberPinjamKembali = DB::table('anggota')->select('nama', 'telp', 'alamat')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->get();
        return $namaMemberPinjamKembali;
    }
}
