<?php namespace App\Controllers;

use App\Models\ModelRiwayatPel;

class Pelatihan extends BaseController
{
    protected $modelRiwayatPel;
        
    public function __construct()
    {
        $this->modelRiwayatPel = new ModelRiwayatPel();
    }
    
    public function index()
	{   
        $data = [
            'pelatihan' => $this->modelRiwayatPel->findAll()
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
        $this->modelRiwayatPel->save([
            'id_biodata' => $this->request->getVar('id_bodata'),
            'nama' => $this->request->getVar('nama'),
            'sertifikat' => $this->request->getVar('sertifikat'),
            'tahun' => $this->request->getVar('tahun'),
            ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/sertifikat');
    }

	public function delete($id)
    {
       
        $this->modelRiwayatPel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/pelatihan');
    }

    public function edit($id)
    {
        $pelatihan = $this->modelRiwayatPel->getpelatihan($id);

        $data = [
            'title' => 'Form ubah Data',
            'pelatihan' => $pelatihan
        ];

        return view ('pelatihan/edit', $data);
    }

    public function update($id)
    {

     
        $this->modelRiwayatPel->save([
            'id' => $id,
            'id_biodata' => $this->request->getVar('id_bodata'),
            'nama' => $this->request->getVar('nama'),
            'sertifikat' => $this->request->getVar('sertifikat'),
            'tahun' => $this->request->getVar('tahun'),
            ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/pelatihan');
    }
}
