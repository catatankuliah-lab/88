<?php

namespace App\Controllers;


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
        return view('admin/layout', $data);
    }
}
