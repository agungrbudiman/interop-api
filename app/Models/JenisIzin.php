<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisIzin extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'izin_val' ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected $table = 'jenis_izin';
    protected $primaryKey = 'id';

}
