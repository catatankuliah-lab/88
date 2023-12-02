<?php

namespace App\Models;

use CodeIgniter\Model;

class BASTModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'bast';
    protected $primaryKey       = 'id_bast';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = [''];

    public function getAllItemByKode($kode)
    {
        $query = $this->db->table('bast')
            ->select('beritaacara.*, itemberitaacara.*')
            ->join('itemberitaacara', 'itemberitaacara.kodeberitaacara = beritaacara.kode_beritaacara', 'left')
            ->where('itemberitaacara.kodeberitaacara', $kode)
            ->get();
        return $query->getResultObject();
    }
}
