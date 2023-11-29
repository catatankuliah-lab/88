<?php

namespace App\Controllers;

use App\Models\AdminGudang;
use App\Models\KPMModel;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'halaman' => 'Dashboard',
            'menu1' => 'selected',
            'menu2' => '',
            'menu3' => '',
            'menu4' => '',
            'menu5' => '',
            'menu6' => '',
            'menu7' => '',
            'menu8' => '',
            'menu9' => '',
            'menu10' => '',
            'menu11' => '',
            'menu12' => '',
            'menu13' => '',
        ];
        return view('admin/dashboard/index', $data);
    }

    public function index_kpm()
    {
        $modelKPM = new KPMModel();
        $data = [
            'halaman' => 'Data KPM',
            'menu1' => '',
            'menu2' => 'selected',
            'menu3' => '',
            'menu4' => '',
            'menu5' => '',
            'menu6' => '',
            'menu7' => '',
            'menu8' => '',
            'menu9' => '',
            'menu10' => '',
            'menu11' => '',
            'menu12' => '',
            'menu13' => '',
            'datakpm' => $modelKPM->findAll()
        ];
        return view('admin/kpm/index', $data);
    }

    public function detail_kpm($id)
    {
        $modelKPM = new KPMModel();
        $data = [
            'halaman' => 'Data KPM',
            'menu1' => '',
            'menu2' => 'selected',
            'menu3' => '',
            'menu4' => '',
            'menu5' => '',
            'menu6' => '',
            'menu7' => '',
            'menu8' => '',
            'menu9' => '',
            'menu10' => '',
            'menu11' => '',
            'menu12' => '',
            'menu13' => '',
            'datakpm' => $modelKPM->find($id)
        ];
        return view('admin/kpm/detail', $data);
    }

    public function index_ag()
    {
        $modelAG = new AdminGudang();
        $data = [
            'halaman' => 'Admin Gudang',
            'menu1' => '',
            'menu2' => '',
            'menu3' => 'selected',
            'menu4' => '',
            'menu5' => '',
            'menu6' => '',
            'menu7' => '',
            'menu8' => '',
            'menu9' => '',
            'menu10' => '',
            'menu11' => '',
            'menu12' => '',
            'menu13' => '',
            'dataAG' => $modelAG->getAllAdminGudang()
        ];
        return view('admin/admingudang/index', $data);
    }

    public function create_ag()
    {
        $data = [
            'halaman' => 'Admin Gudang',
            'menu1' => '',
            'menu2' => '',
            'menu3' => 'selected',
            'menu4' => '',
            'menu5' => '',
            'menu6' => '',
            'menu7' => '',
            'menu8' => '',
            'menu9' => '',
            'menu10' => '',
            'menu11' => '',
            'menu12' => '',
            'menu13' => '',
        ];
        return view('admin/admingudang/create', $data);
    }
}
