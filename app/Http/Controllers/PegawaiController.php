<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
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

    public function showAllPegawai()
    {
        return response()->json(Pegawai::all());
    }

    public function showOnePegawai($pe_id)
    {
        return response()->json(Pegawai::find($pe_id));
    }

    public function create(Request $request)
    {
        $pegawai = Pegawai::create($request->all());
        return response()->json($pegawai, 201);
    }

    public function update($pe_id, Request $request)
    {
        $pegawai = Pegawai::findOrFail($pe_id);
        $pegawai->update($request->all());
        return response()->json($pegawai, 200);
    }

    public function delete($pe_id)
    {
        Pegawai::findOrFail($pe_id)->delete();
        return response('Deleted Successfully', 200);
    }

}
