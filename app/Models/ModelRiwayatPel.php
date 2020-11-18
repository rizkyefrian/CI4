<?php namespace App\Models;

use CodeIgniter\Model;

class ModelRiwayatPel extends Model
{
    protected $table = 'riw_pelatihan';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_biodata', 'nama',
        'sertifikat', 'tahun',
        'created_at' , 'updated_at'
    ];

    public function getRiwPelatihan($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}