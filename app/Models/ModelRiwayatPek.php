<?php namespace App\Models;

use CodeIgniter\Model;

class ModelRiwayatPekerjaan extends Model
{
    protected $table = 'riw_pekerjaan';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_biodata', 'nama',
        'posisi', 'salary', 'tahun',
        'created_at' , 'updated_at'
    ];

    public function getRiwPekerjaan($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}