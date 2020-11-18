<?php namespace App\Controllers;

use App\Models\ModelRiwayatPek;

class Pekerjaan extends BaseController
{
    protected $modelRiwayatPek;
        
    public function __construct()
    {
        $this->modelRiwayatPek = new ModelRiwayatPek();
    }
    
    public function index()
	{   
        $data = [
            'pelatihan' => $this->modelRiwayatPek->findAll()
        ];
        return view('/pelatihan/index', $data);
        
    }
    
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view ('pelatihan/create', $data);
    }

    public function save()
    {
        $this->modelRiwayatPek->save([
            'id_biodata' => $this->request->getVar('id_bodata'),
            'nama' => $this->request->getVar('nama'),
            'posisi' => $this->request->getVar('posisi'),
            'salary' => $this->request->getVar('salary'),
            'tahun' => $this->request->getVar('tahun'),
            ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/pelatihan');
    }

	public function delete($id)
    {
       
        $this->modelRiwayatPek->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/pelatihan');
    }

    public function edit($id)
    {
        $pelatihan = $this->modelRiwayatPek->getpelatihan($id);

        $data = [
            'title' => 'Form ubah Data',
            'pelatihan' => $pelatihan
        ];

        return view ('pelatihan/edit', $data);
    }

    public function update($id)
    {

     
        $this->modelRiwayatPek->save([
            'id' => $id,
            'id_biodata' => $this->request->getVar('id_bodata'),
            'nama' => $this->request->getVar('nama'),
            'posisi' => $this->request->getVar('posisi'),
            'salary' => $this->request->getVar('salary'),
            'tahun' => $this->request->getVar('tahun'),

            ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/pelatihan');
    }
}
