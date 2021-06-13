<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'pe_id', 'cuti_id', 'saldo', 'durasi', 'start', 'end', 'alamat', 'keterangan' ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected $table = 'cuti';
    protected $primaryKey = 'id';

}
