<?php

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

function format_tanggal($value)
{
    return date('H:i:s - d M Y', strtotime($value));
}

function telat_pengembalian()
{
    $data = DB::table('transactions')
        ->select('members.name', DB::raw('DATEDIFF(NOW(), transactions.date_end) as diffday'))
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('date_end', '<', now())
        ->whereBetween('date_end', ['date_start', now()])
        ->get();

    return $data;
}
