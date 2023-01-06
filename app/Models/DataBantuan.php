<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBantuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'jenis_bantuan',
        'nominal',
    ];
    protected $table = 'data_bantuans';
}
