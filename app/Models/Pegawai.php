<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pe_nama', 'pe_nip', 'pa_id', 'pe_tempat_lahir', 'pe_tanggal_lahir', 'pe_jenis_kelamin'
, 'ag_id', 'st_id', 'pe_no_hp', 'pe_email', 'pe_no_bpjs', 'pr_id', 'kb_id', 'kc_id', 'kl_id', 'pe_alamat', 'pe_hobi' ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected $table = 'pegawai';
    protected $primaryKey = 'pe_id';

    public function cuti()
    {
        return $this->hasMany(Cuti::class, 'pe_id', 'pe_id');
    }
}
