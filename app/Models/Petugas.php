<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    public $primaryKey = 'id_petugas';
    protected $fillable = [
        'nama', 'jabatan', 'tempat_lahir', 'tanggal_lahir', 'id_banjar', 'no_telepon', 'mulai_bekerja'
    ];
}