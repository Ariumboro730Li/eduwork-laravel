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
        $namaMemberPinjamKembali = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'peminjaman.id_pinjam')
            ->select('anggota.nama', 'anggota.telp', 'anggota.alamat', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'detail_peminjaman.qty')
            ->get();
        // Nomor 7
        $namaPinjamKembaliBulanJuni = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'peminjaman.id_pinjam')
            ->select('anggota.nama', 'anggota.telp', 'anggota.alamat', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'detail_peminjaman.qty')
            ->whereBetween('tgl_kembali', ['2021-06-01', '2021-06-30'])->get();
        // Nomor 8
        $namaTanggalPinjamKembaliBulanMei = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'peminjaman.id_pinjam')
            ->select('anggota.nama', 'anggota.telp', 'anggota.alamat', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'detail_peminjaman.qty')
            ->whereBetween('tgl_pinjam', ['2021-05-01', '2021-05-31'])->get();
        // Nomor 9
        $namaTanggalPinjamKembaliBulanJuni = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'peminjaman.id_pinjam')
            ->select('anggota.nama', 'anggota.telp', 'anggota.alamat', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'detail_peminjaman.qty')
            ->whereBetween('tgl_pinjam', ['2021-06-01', '2021-06-30'])->get();
        // Nomor 10
        $peminjamAlamatBandung = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'peminjaman.id_pinjam')
            ->select('anggota.nama', 'anggota.telp', 'anggota.alamat', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'detail_peminjaman.qty')
            ->where('alamat', 'like', '%Bandung%')->get();
        // Nomor 11
        $peminjamAlamatBandungJenisKelaminPerempuan = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'peminjaman.id_pinjam')
            ->select('anggota.nama', 'anggota.sex', 'anggota.telp', 'anggota.alamat', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'detail_peminjaman.qty')
            ->where('sex', 'like', '%P%')->get();

        // Nomor 12
        $jumlahPeminjamLebihDariSatu = DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'peminjaman.id_pinjam')
            ->select('anggota.nama', 'anggota.sex', 'anggota.telp', 'anggota.alamat', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'detail_peminjaman.isbn', 'detail_peminjaman.qty')
            ->where('qty', '>', 1)->get();

        // Nomor 13
        $memberTanggalKembaliJudulBukuHargaPinjamTotal =  DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'detail_peminjaman.id_pinjam')
            ->join('buku', 'detail_peminjaman.id_pinjam', '=', 'buku.isbn')
            ->select('anggota.nama', 'anggota.sex', 'anggota.telp', 'anggota.alamat', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'detail_peminjaman.isbn', 'detail_peminjaman.qty', 'buku.isbn', 'buku.judul')
            ->selectRaw('qty * harga_pinjam as total')->get();

        // Nomor 14
        $memberTanggalKembaliISBNJudulBuku =  DB::table('anggota')->join('peminjaman', 'anggota.id_anggota', '=', 'peminjaman.id_pinjam')
            ->join('detail_peminjaman', 'peminjaman.id_pinjam', '=', 'detail_peminjaman.id_pinjam')
            ->join('buku', 'detail_peminjaman.id_pinjam', '=', 'buku.isbn')
            ->join('penerbit', 'buku.id_penerbit', '=', 'penerbit.id_penerbit')
            ->join('pengarang', 'buku.id_pengarang', '=', 'pengarang.id_pengarang')
            ->join('katalog', 'buku.id_katalog', '=', 'katalog.id_katalog')
            // Katalog tidak bisa ditampilkan
            ->select(
                'anggota.nama',
                'anggota.telp',
                'anggota.alamat',
                'peminjaman.tgl_pinjam',
                'peminjaman.tgl_kembali',
                'detail_peminjaman.isbn',
                'detail_peminjaman.qty',
                'buku.judul',
                'penerbit.nama_penerbit',
                'pengarang.nama_pengarang',
                'katalog.nama'
            )
            ->get();
        // Nomor 15
        $tampilSemuaKatalogJudulBukuKatalogMempunyaiRelasiBuku =  DB::table('buku')
            ->join('katalog', 'buku.id_katalog', '=', 'katalog.id_katalog')
            ->select(
                'katalog.id_katalog',
                'buku.judul',
            )
            ->get();

        // Nomor 16
        $tampilSemuaDataBukuNamaTerbitYangTidakMempunyaiRelasiPenerbit = DB::table('buku')
            ->join('penerbit', 'buku.id_penerbit', '=', 'penerbit.id_penerbit')
            ->get();

        // Nomor 17
        $tampilkanJumlahPengarangPg05 = DB::table('pengarang')->join('buku', 'buku.id_pengarang', '=', 'pengarang.id_pengarang')
            // ->select(DB::raw('count(pengarang.id_pengarang) as banyak'))
            ->selectRaw('count(pengarang.id_pengarang) as jumlah, pengarang.id_pengarang')
            ->groupBy('pengarang.id_pengarang')
            // ->select('pengarang.id_pengarang')
            ->where('pengarang.id_pengarang', '=', 'PG05')
            ->get();

        // Nomor 18
        $tampilkanDataBukuHargaLebihDari1000 = DB::table('buku')
            ->where('harga_pinjam', '>', 10000)
            ->get();

        // Nomor 19
        $tampilDataBukuDiterbitkanPenerbit01QtyLebih10 = DB::table('buku')
            ->where('id_penerbit', '=', 'PN01')
            ->where('qty_stok', '>', 10)
            ->get();

        // Nomor 20
        $tampilMemberBaruDitamabahBulanJuni = DB::table('anggota')
            ->whereBetween('tgl_entry', [2021 - 06 - 01, 'and', 2021 - 06 - 30])
            ->get();

        return $tampilMemberBaruDitamabahBulanJuni;
    }
}
