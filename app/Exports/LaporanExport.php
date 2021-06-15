<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class LaporanExport implements FromCollection
{
    protected $laporan;

    public function __construct($laporan)
    {
        $this->laporan = $laporan;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->laporan;
    }
}
