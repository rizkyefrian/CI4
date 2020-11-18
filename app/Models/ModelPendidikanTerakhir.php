<?php namespace App\Models;

use CodeIgniter\Model;

class ModelPendidikanTerakhir extends Model
{
    protected $table = 'pend_terakhir';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_biodata', 'status', 'nama',
        'jurusan', 'lulus', 'ipk',
        'created_at' , 'updated_at'
    ];

    public function getPendTerakhir($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}