<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_buku',
        'pengarang',
        'penerbit',
        'keyword',
        'tahun_terbit',
        'tempat_buku'
    ];

    protected $guarded = [
        'created_at','updated_at'
    ];
}
