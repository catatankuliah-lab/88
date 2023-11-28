<?php $this->extend('admin/layout') ?>
<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title">Tambah Data Admin Kecamatan</h5>
            <form action="<?= base_url('admin/ak/add-ak') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="col-12 mb-3">
                    <label for="nama" class="h6">Foto Admin Kecamatan</label><br>
                    <img src="<?= base_url('assetss/images/gallery/chair.jpg') ?>" class="shadow-sm" alt="" style="border-radius: 20px;">
                    <!-- Tambahkan input file untuk foto -->
                    <input type="file" name="foto_admin_kecamatan" accept="image/*" class="mb-2">
                </div>
                <div class="col-12 mb-3">
                    <label for="nik_admin_kecamatan" class="h6">NIK</label>
                    <input name="nik_admin_kecamatan" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" placeholder="Masukan NIK Disini">
                </div>
                <div class="col-12 mb-3">
                    <label for="nama_admin_kecamatan" class="h6">Nama Lengkap</label>
                    <input name="nama_admin_kecamatan" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" placeholder="Masukan Nama Lengkap Disini">
                </div>
                <div class="col-12 mb-3">
                    <label for="nama_kecamatan" class="h6">Nama Kecamatan</label>
                    <select name="nama_kecamatan" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" id="exampleFormControlSelect1" style="height: 50px !important; font-size: 14px;">
                        <option value="Japara">Japara</option>
                        <option value="Kuningan">Kuningan</option>
                    </select>
                </div>
                <div class="col-12 mt-3">
                    <label for="username" class="h6">Username</label>
                    <input name="username" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" placeholder="Masukan Username Disini">
                </div>
                <div class="col-12 mt-3 mb-3">
                    <label for="password" class="h6">Password</label>
                    <input name="password" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="password" style="height: 50px !important; font-size: 14px;" placeholder="Masukan Password Disini">
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" style="height: 50px !important; font-size: 14px;" class="btn waves-effect custom-shadow waves-light btn-rounded btn-primary w-100">Simpan Data</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php $this->endSection() ?>