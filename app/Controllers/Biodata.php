<?php namespace App\Controllers;

use App\Models\ModelBiodata;

class Biodata extends BaseController
{
    protected $modelBiodata;

    public function __construct()
    {
        $this->modelBiodata = new ModelBiodata();
    }

	public function index()
	{

        $data = [
            'biodata' => $this->modelBiodata->getBiodata(),
            // 'isi' => 'biodata/index',
        ];
        // echo view('layout/Wrapper', $data);  
        return view('biodata/index');
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data',
            // 'isi' => 'biodata/add',
            'validation' => \Config\Services::validation(),
            
        ];

        return view ('biodata/add', $data);
        // echo view('layout/Wrapper', $data);  

    }

    public function save()
    {
        //membuat validasi
        // if(!$this->validate([
        //     //pesan error di setting sendiri
        //     'posisi' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} harus diisi',
        //         ]
        //         ],
        //     'nama' => [
        //         'rules' => 'required',
        //         'errors' => [
        //         'required' => '{field} harus diisi',
        //     ]
        //     ],
           
        //     'tempat_lahir' => [
        //         'rules' => 'required',
        //         'errors' => [
        //         'required' => '{field} harus diisi',
        //     ]
        //     ],
        //     'tanggal_lahir' => [
        //         'rules' => 'required',
        //         'errors' => [
        //         'required' => '{field} harus diisi',
        //     ]
        //     ],
        //     'jk' => [
        //         'rules' => 'required',
        //         'errors' => [
        //         'required' => '{field} harus diisi',
        //     ]
        //     ],
        //     'agama' => [
        //         'rules' => 'required',
        //         'errors' => [
        //         'required' => '{field} harus diisi',
        //     ]
        //     ],
        // ])){
        
        //     return redirect()->to('/biodata/create')->withInput();
        // }

        $this->modelBiodata->save([
            'id_user' => $this->request->getVar('id_user'),
            'posisi' => $this->request->getVar('posisi'),
            'no_ktp' => $this->request->getVar('no_ktp'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jk' => $this->request->getVar('jk'),
            'agama' => $this->request->getVar('agama'),
            'gol_darah' => $this->request->getVar('gol_darah'),
            'status' => $this->request->getVar('status'),
            'alamt_ktp' => $this->request->getVar('alamt_ktp'),
            'alamat_tinggal' => $this->request->getVar('alamat_tinggal'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'no_lain' => $this->request->getVar('no_lain'),
            'skill' => $this->request->getVar('skill'),
            'penempatan' => $this->request->getVar('penempatan'),
            'gaji' => $this->request->getVar('gaji'),
            'tempat' => $this->request->getVar('tempat'),
            'tanggal' => $this->request->getVar('tanggal'),
            ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/biodata');
    }

	//--------------------------------------------------------------------

    public function delete($id)
    {
        $this->modelBiodata->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/biodata');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation(),
            'biodata' => $this->modelBiodata->getBiodata($id)
        ];

        return view ('biodata/edit', $data);
    }

    public function update($id)
    {

        //membuat validasi
        $namabiodata = $this->modelBiodata->getBiodata($this->request->getVar('id'));
        if($namabiodata['nama'] == $this->request->getVar('nama')){
            $rule_nama = 'required';
        }

        if(!$this->validate([
            'nama' => [
                'rules' =>  $rule_nama,
                'errors' => [
                    'required' => '{field} Nama biodata harus diisi',
                ]
                ],
        ])){
            return redirect()->to('/biodata/edit/' .$this->request->getVar('id'))->withInput();
        }

        $this->modelBiodata->save([
            'id' => $this->request->getVar('id'),
            'id_user' => $this->request->getVar('id_user'),
            'posisi' => $this->request->getVar('posisi'),
            'no_ktp' => $this->request->getVar('no_ktp'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jk' => $this->request->getVar('jk'),
            'agama' => $this->request->getVar('agama'),
            'gol_darah' => $this->request->getVar('gol_darah'),
            'status' => $this->request->getVar('status'),
            'alamt_ktp' => $this->request->getVar('alamt_ktp'),
            'alamat_tinggal' => $this->request->getVar('alamat_tinggal'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'no_lain' => $this->request->getVar('no_lain'),
            'skill' => $this->request->getVar('skill'),
            'penempatan' => $this->request->getVar('penempatan'),
            'gaji' => $this->request->getVar('gaji'),
            'tempat' => $this->request->getVar('tempat'),
            'tanggal' => $this->request->getVar('tanggal'),
            ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/biodata');
    }
}
