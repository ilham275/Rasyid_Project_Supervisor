<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'tanggal',
        'jam_awal',
        'jam_akhir',
        'id_supervisi'
    ];
}
