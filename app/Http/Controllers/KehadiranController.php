<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Support\Facades\DB;

class KehadiranController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAllKehadiran()
    {
        return response()->json(kehadiran::all());
    }

    public function showCompleteKehadiran()
    {
        $kehadiran = DB::table('kehadiran')
            ->select('kehadiran.*', 'pegawai.pe_nama')
            ->join('pegawai', 'kehadiran.pe_id', '=', 'pegawai.pe_id')
            ->get();
        return response()->json($kehadiran, 200);
    }

    public function showKehadiranPegawai($pe_id)
    {
        $kehadiran = DB::table('kehadiran')
            ->where('pe_id', '=', $pe_id)
            ->get();
        return response()->json($kehadiran, 200);
    }

    //
}
