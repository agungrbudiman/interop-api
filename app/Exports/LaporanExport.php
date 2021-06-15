<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LaporanExport implements FromCollection, WithHeadings
{
    protected $laporan;
    protected $headings;

    public function __construct(\Illuminate\Support\Collection $laporan)
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

    public function headings(): array
    {
        return [
            'ID Pegawai',
            'Nama Pegawai',
            'Jumlah Kehadiran',
            'Jumlah Cuti (hari)',
            'Jumlah Izin (hari)',
            'Total Jam Kerja (jam)',
        ];
    }
}
