<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\JenisIzin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IzinController extends Controller
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

    public function showAllIzin()
    {
        return response()->json(Izin::all());
    }

    public function showOneIzin($id)
    {
        return response()->json(Izin::find($id));
    }

    public function createIzin(Request $request)
    {
        $izin = Izin::create($request->all());
        return response()->json($izin, 201);
    }

    public function createKategori(Request $request)
    {
        $kategori = JenisCuti::create($request->all());
        return response()->json($kategori, 201);
    }

    public function showKategori()
    {
        return response()->json(JenisIzin::all());
    }

    public function showIzinPegawai($pe_id)
    {
        $izin = DB::table('izin')
            ->where('pe_id', '=', $pe_id)
            ->get();
        return response()->json($izin, 200);
    }

    public function showCompleteIzin() {
        $izin = DB::table('izin')
            ->select('izin.*', 'jenis_izin.izin_val', 'pegawai.pe_nama')
            ->join('jenis_izin', 'izin.izin_id', '=', 'jenis_izin.id')
            ->join('pegawai', 'izin.pe_id', '=', 'pegawai.pe_id')
            ->get();
        return response()->json($izin, 200);
    }

    //
}
