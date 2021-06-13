<?php

namespace App\Http\Controllers;

use App\Models\Cuti;

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

    //
}
