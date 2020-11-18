<?php namespace App\Controllers;

use App\Models\ModelPendidikanTerakhir;

class Pendidikan extends BaseController
{
    protected $modelPendidikanTerakhir;
        
    public function __construct()
    {
        $this->modelPendidikanTerakhir = new ModelPendidikanTerakhir();
    }
    
    public function index()
	{   
        $data = [
            'Pendidikan' => $this->modelPendidikanTerakhir->findAll()
        ];
        return view('/Pendidikan/index', $data);
        
    }
    
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view ('Pendidikan/create', $data);
    }

    public function save()
    {
        $this->modelPendidikanTerakhir->save([
            'id_biodata' => $this->request->getVar('id_bodata'),
            'status' => $this->request->getVar('status'),
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan'),
            'lulus' => $this->request->getVar('lulus'),
            'ipk' => $this->request->getVar('ipk'),
            ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/jurusan');
    }

	public function delete($id)
    {
       
        $this->modelPendidikanTerakhir->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Pendidikan');
    }

    public function edit($id)
    {
        $Pendidikan = $this->modelPendidikanTerakhir->getPendidikan($id);

        $data = [
            'title' => 'Form ubah Data',
            'Pendidikan' => $Pendidikan
        ];

        return view ('Pendidikan/edit', $data);
    }

    public function update($id)
    {

     
        $this->modelPendidikanTerakhir->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'gambar' => $this->request->getVar('gambar'),
           
            ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/Pendidikan');
    }
}
