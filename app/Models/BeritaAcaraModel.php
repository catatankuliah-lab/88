<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaAcaraModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'beritaacara';
    protected $primaryKey       = 'id_beritaacara';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_gudang', 'kode_beritaacara', 'tanggal_beritaacara_dibuat', 'namapdf', 'foto_beritaacara', 'tanggal_upload_beritaacara', 'status_beritaacara'];

    public function getAllItemByKode($kode)
    {
        $query = $this->db->table('beritaacara')
            ->select('beritaacara.*, itemberitaacara.*')
            ->join('itemberitaacara', 'itemberitaacara.kodeberitaacara = beritaacara.kode_beritaacara', 'left')
            ->where('itemberitaacara.kodeberitaacara', $kode)
            ->get();
        return $query->getResultObject();
    }
}
