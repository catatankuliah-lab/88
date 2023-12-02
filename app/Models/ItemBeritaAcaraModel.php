<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemBeritaAcaraModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'itemberitaacara';
    protected $primaryKey       = 'id_itemberitaacara';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_gudang', 'kodeberitaacara', 'desa_itemberitaacara', 'kecamatan_itemberitaacara', 'kabupaten_itemberitaacara', 'bobot_itemberitaacara', 'status_itemberitaacara'];

    public function getCekStatus()
    {
        $query = $this->db->table('itemberitaacara')
            ->select('itemberitaacara.*')
            ->where('itemberitaacara.status_itemberitaacara', 'Dalam Proses')
            ->get();
        return $query->getResultObject();
    }

    public function getAllItemByKode($kode)
    {
        $query = $this->db->table('itemberitaacara')
            ->select('itemberitaacara.*')
            ->where('itemberitaacara.kodeberitaacara', $kode)
            ->get();
        return $query->getResultObject();
    }

    public function updateStatus($kode, $data)
    {
        $this->db->table('itemberitaacara')->where('itemberitaacara.kodeberitaacara', $kode)->update($data);
    }

    public function getAllItemDalamProses()
    {
        $query = $this->db->table('itemberitaacara')
            ->select('itemberitaacara.*')
            ->where('itemberitaacara.status_itemberitaacara', 'Dalam Proses')
            ->get();
        return $query->getResultObject();
    }
}
