<?php

namespace App\Controllers;


class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'halaman' => 'Dashboard',
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
        return view('admin/layout', $data);
    }

    public function index_kpm()
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
        return view('admin/kpm/index', $data);
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
}
?>