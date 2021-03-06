<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = 'alternatif';

    protected $fillable = [
        'nama',
        'pendidikan_terakhir',
        'jenis_kelamin',
        'tempat_tinggal',
        'no_telp',
    ];

    public $timestamps = 'true';
}
