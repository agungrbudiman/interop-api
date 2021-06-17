<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
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

    public function showLaporan() {
        $laporan = DB::table('pegawai')
        ->select('pegawai.pe_id', 'pegawai.pe_nama', 
            DB::raw('count(distinct(kehadiran.id)) as kehadiran'), 
            DB::raw('round(coalesce((sum(cuti.durasi)*count(distinct(cuti.cuti_id))/count(*)),0)) as cuti'),
            DB::raw('round(coalesce((sum(izin.durasi)*count(distinct(izin.izin_id))/count(*)),0)) as izin'),
            DB::raw('round(coalesce((sum(timestampdiff(minute,kehadiran.jam_masuk,kehadiran.jam_keluar))*count(distinct(kehadiran.id))/count(*)/60),0)) as jam_kerja'),
        )
        ->leftJoin('kehadiran', 'pegawai.pe_id', '=', 'kehadiran.pe_id')
        ->leftJoin('cuti', 'pegawai.pe_id', '=', 'cuti.pe_id')
        ->leftJoin('izin', 'pegawai.pe_id', '=', 'izin.pe_id')
        ->groupBy('pegawai.pe_id')
        ->get();
        return response()->json($laporan, 200);
    }
}
