<?php

namespace App\Controllers;

use App\Models\AdminGudang;

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
        ];
        return view('admin/kpm/index', $data);
    }

    public function detail_kpm()
    {
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
        ];
        return view('admin/kpm/detail', $data);
    }

    public function create_kpm()
    {
        $data = [
            'halaman' => 'Dashboard',
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
        ];
        return view('admin/kpm/create', $data);
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
        return view('admin/ag/', $data);
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

    public function index_ak(){
        $data = [
            'halaman' => 'Admin Kecamatan',
            'menu1' => '',
            'menu2' => '',
            'menu3' => '',
            'menu4' => 'selected',
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
        return view('admin/adminkecamatan/index', $data);
    }

    public function create_ak()
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
        return view('admin/adminkecamatan/create', $data);
    }

}
?>