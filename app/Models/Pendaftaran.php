<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'agama',
        'hobi',
        'komentar',
        'latitude',
        'longitude',
        'password'
    ];
}
