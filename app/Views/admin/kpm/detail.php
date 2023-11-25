<?php $this->extend('owner/layout') ?>
<?php $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Pegawai</h4>
                <div class="row mt-4">
                    <div class="col-12">
                        <label for="nama" class="h6">Nama Lengkap</label>
                        <input class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" placeholder="Masukan Nama Lengkap Disini">
                    </div>
                    <div class="col-12 mt-3">
                        <label for="nama" class="h6">Role</label>
                        <select class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" id="exampleFormControlSelect1" style="height: 50px !important; font-size: 14px;">
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Kasir</option>
                        </select>
                    </div>
                    <div class="col-12 mt-3">
                        <label for="nama" class="h6">Username</label>
                        <input class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" placeholder="Masukan Nama Lengkap Disini">
                    </div>
                    <div class="col-12 mt-3 mb-3">
                        <label for="nama" class="h6">Password</label>
                        <input class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" placeholder="Masukan Nama Lengkap Disini">
                    </div>
                    <div class="col-6 mt-3">
                        <button type="button" style="height: 50px !important; font-size: 14px;" class="btn waves-effect custom-shadow waves-light btn-rounded btn-primary w-100">Simpan Data</button>
                    </div>
                    <div class="col-6 mt-3">
                        <button type="button" style="height: 50px !important; font-size: 14px;" class="btn waves-effect custom-shadow waves-light btn-rounded btn-danger w-100">Hapus Data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>