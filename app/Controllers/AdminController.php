<?php

namespace App\Controllers;

use App\Models\AdminGudang;
use App\Models\AdminKecamatan;

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

    /** ================================================================================= */
    /** ================================ Admin Kecamatan ================================ */
    /** ================================================================================= */

    public function index_ak(){

        $modelAK = new AdminKecamatan();
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
            'dataAK' => $modelAK->getAllAdminKecamatn()
        ];
        return view('admin/adminkecamatan/index', $data);
    }

    public function create_ak()
    {   
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
        return view('admin/adminkecamatan/create', $data);
    }

    public function add_ak()
    {
        $modelAK = new AdminKecamatan();

        $data = [
            'nik_admin_kecamatan' => $this->request->getPost('nik_admin_kecamatan'),
            'nama_admin_kecamatan' => $this->request->getPost('nama_admin_kecamatan'),
            'nama_kecamatan' => $this->request->getPost('nama_kecamatan'),
        ];
        $modelAK->insert($data);
        return redirect()->to('/admin/ak/');
    }   

    public function edit_ak($id)
    {
        $modelAK = new AdminKecamatan();
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
            'dataAK' => $modelAK->find($id)
        ];
        return view('admin/adminkecamatan/detail', $data);   
    }

    public function update_ak($id)
    {
        $modelAK = new AdminKecamatan();
        $data = [
            'id_admin_kecamatan' => $id,
            'nik_admin_kecamatan' => $this->request->getPost('nik_admin_kecamatan'),
            'nama_admin_kecamatan' => $this->request->getPost('nama_admin_kecamatan'),
            'nama_kecamatan' => $this->request->getPost('nama_kecamatan'),
        ];
        $modelAK->update($id, $data);
        return redirect()->to('/admin/ak/');

    }
    /** ================================================================================= */
    /** ============================ End Admin Kecamatan ================================ */
    /** ================================================================================= */

}
?>