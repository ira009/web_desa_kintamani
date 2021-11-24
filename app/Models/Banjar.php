<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banjar extends Model
{
    use HasFactory;
    public $primaryKey = 'id_banjar';
    protected $fillable = [
        'nama', 'jumlah_penduduk'
    ];
}