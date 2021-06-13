<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\JenisCuti;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CutiController extends Controller
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

    public function showAllCuti()
    {
        return response()->json(Cuti::all());
    }

    public function showOneCuti($id)
    {
        return response()->json(Cuti::find($id));
    }

    public function createCuti(Request $request)
    {
        $cuti = Cuti::create($request->all());
        return response()->json($cuti, 201);
    }

    public function createKategori(Request $request)
    {
        $kategori = JenisCuti::create($request->all());
        return response()->json($kategori, 201);
    }

    public function showKategori()
    {
        return response()->json(JenisCuti::all());
    }

    public function showCutiPegawai($pe_id)
    {
        $cuti = DB::table('cuti')
            ->where('pe_id', '=', $pe_id)
            ->get();
        return response()->json($cuti, 200);
    }

    public function showCompleteCuti() {
        $cuti = DB::table('cuti')
            ->select('cuti.*', 'jenis_cuti.cuti_val', 'pegawai.pe_nama')
            ->join('jenis_cuti', 'cuti.cuti_id', '=', 'jenis_cuti.id')
            ->join('pegawai', 'cuti.pe_id', '=', 'pegawai.pe_id')
            ->get();
        return response()->json($cuti, 200);
    }

    //
}
