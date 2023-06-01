<?php

use Illuminate\Support\Facades\DB;

function format_tanggal($value)
{
    return date('H:i:s - d M Y', strtotime($value));
}

function telat_pengembalian()
{
    $data = DB::table('transactions')
        ->select('members.name', 'date_end')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('date_end', '<', now())
        ->get();

    return $data;
}
