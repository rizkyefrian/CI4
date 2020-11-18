<?php namespace App\Models;

use CodeIgniter\Model;

class ModelBiodata extends Model
{
    protected $table = 'biodatas';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_user', 'posisi', 'nama',
        'no_ktp', 'tempat_lahir', 'tanggal_lahir',
        'jk', 'agama', 'gol_darah', 'status',
        'alamt_ktp', 'alamat_tinggal', 'email',
        'no_telp', 'no_lain','skill', 'penempatan',
        'gaji', 'tempat', 'tanggal',
        'created_at' , 'updated_at'
    ];

    public function getBiodata($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}