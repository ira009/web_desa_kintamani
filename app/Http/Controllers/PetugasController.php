<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasModel;

class PetugasController extends Controller
{

    public function __construct()
    {
        $this->PetugasModel = new PetugasModel();

    }

    public function index()
    {

        $data = [
            'petugas' => $this->PetugasModel->allData(),
        ];
        return view('v_Petugas', $data);
    }

    public function detail($id_petugas)
    {
        if (!$this->PetugasModel->detailData($id_petugas)) {
            abort(404);
        }
        $data = [
            'petugas' => $this->PetugasModel->detailData($id_petugas),
        ];
        return view('v_detailpetugas', $data);
    }

    public function add()
    {
        return view('v_addpetugas');
    }

    public function insert()
    {
        Request()->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_telepon' => 'required',
            'mulai_bekerja' => 'required'
        ],
        [
            'nama.required' => 'Nama wajib diisi!!',
            'jabatan.required' => 'Jabatan wajib diisi!!',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi!!',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!!',
            'no_telepon.required' => 'No telepon wajib diisi!!',
            'mulai_bekerja.required' => 'Mulai bekerja wajib diisi!!'
        ]);

        $data = [
            'nama' => Request()->nama,
            'jabatan' => Request()->jabatan,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'no_telepon' => Request()->no_telepon,
            'mulai_bekerja' => Request()->mulai_bekerja,
        ];

        $this->PetugasModel->addData($data);
        return redirect()->route('petugas')->with('pesan', 'Data berhasil di tambahkan.');
    }

    public function edit($id_petugas)
    {
        $data = [
            'petugas' => $this->PetugasModel->detailData($id_petugas),
        ];
        return view('v_editpetugas', $data);
    }

    public function update($id_petugas)
    {
        Request()->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_telepon' => 'required',
            'mulai_bekerja' => 'required'
        ],
        [
            'nama.required' => 'Nama wajib diisi!!',
            'jabatan.required' => 'Jabatan wajib diisi!!',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi!!',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!!',
            'no_telepon.required' => 'No telepon wajib diisi!!',
            'mulai_bekerja.required' => 'Mulai bekerja wajib diisi!!'
        ]);

        $data = [
            'nama' => Request()->nama,
            'jabatan' => Request()->jabatan,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'no_telepon' => Request()->no_telepon,
            'mulai_bekerja' => Request()->mulai_bekerja,
        ];

        $this->PetugasModel->editData($id_petugas, $data);
        return redirect()->route('petugas')->with('pesan', 'Data berhasil di Update.');
    }
    public function delete($id_petugas)
    {
        $this->PetugasModel->deleteData($id_petugas);
        return redirect()->route('petugas')->with('pesan', 'Data berhasil di Hapus.');
    }
}
