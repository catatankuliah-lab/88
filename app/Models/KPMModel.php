<?php

namespace App\Models;

use CodeIgniter\Model;

class KPMModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'teskpm';
    protected $primaryKey       = 'id_kpm';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['nomor_cekpos', 'nama_penerima', 'kode_kppk', 'provinsi', 'kota_kabupaten', 'kecamatan', 'kelurahan', 'nodanom', 'alamat', 'status', 'petugas_bayar', 'tanggal_bayar', 'kprk_bayar'];

    public function getAllAdminGudang()
    {
        $query = $this->db->table('admingudang')
            ->select('admingudang.*, user.*')
            ->join('user', 'user.id_user = admingudang.id_user', 'left')
            ->get();
        return $query->getResult();
    }
}
