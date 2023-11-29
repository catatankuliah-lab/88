<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminKecamatan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'adminkecamatan';
    protected $primaryKey       = 'id_admin_kecamatan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['nik_admin_kecamatan', 'nama_admin_kecamatan', 'nama_kecamatan'];
    // protected $allowedFields    = ['id_user', 'nik_admin_kecamatan', 'nama_admin_kecamatan', 'nama_kecamatan', 'foto_admin_kecamatan'];

    public function getAllAdminKecamatn()
    {
        $query = $this->db->table('adminkecamatan')
            ->select('adminkecamatan.*, user.*')
            ->join('user', 'user.id_user = adminkecamatan.id_user', 'left')
            ->get();
        return $query->getResult();
    }
}
