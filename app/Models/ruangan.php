<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ruangan', 'kode_ruangan', 'tipe', 'ketersediaan', 'tempat_ruangan'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];
}
