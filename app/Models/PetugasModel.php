<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetugasModel extends Model
{
    public function allData()
    {
        return DB::table('petugass')->get();
    }
    public function detailData($id_petugas)
    {
        return DB::table('petugass')->where('id_petugas', $id_petugas)->first();
    }


    public function addData($data)
    {
        DB::table('petugass')->insert($data);
    }

    public function editData($id_petugas, $data)
    {
        DB::table('petugass')
        ->where('id_petugas', $id_petugas)
        ->update($data);
    }
    public function deleteData($id_petugas)
    {
        DB::table('petugass')
        ->where('id_petugas', $id_petugas)
        ->delete();
    }
}