<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminGudang extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'admingudang';
    protected $primaryKey       = 'id_admin_gudang';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_user', 'nik_admin_gudang', 'nama_admin_gudang', 'nama_dan_lokasi_gudang', 'foto_admin_gudang'];

    public function getAllAdminGudang()
    {
        $query = $this->db->table('admingudang')
            ->select('admingudang.*, user.*')
            ->join('user', 'user.id_user = admingudang.id_user', 'left')
            ->get();
        return $query->getResult();
    }
}
