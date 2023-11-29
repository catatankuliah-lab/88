<?php $this->extend('admin/layout') ?>
<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title">Detail Data KPM</h5>
            <div class="row mt-4">
                <div class="col-12 mb-3 d-none">
                    <label for="nama" class="h6">Foto KPM</label><br>
                    <img src="<?= base_url('assetss/images/gallery/chair.jpg') ?>" class="shadow-sm" alt="" style="border-radius: 20px;">
                </div>
                <div class="col-12 mb-3">
                    <label for="nama" class="h6">Nomor Cekpos</label>
                    <input value="<?= $datakpm->nomor_cekpos ?>" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" readonly placeholder="Masukan Nama Lengkap Disini">
                </div>
                <div class="col-12">
                    <label for="nama" class="h6">Nama Penerima KPM (Kode KPPK)</label>
                    <input value="<?= $datakpm->nama_penerima . ' (' . $datakpm->kode_kppk . ')' ?>" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" readonly placeholder="Masukan Nama Lengkap Disini">
                </div>
                <div class="col-12 mt-3">
                    <label for="nama" class="h6">Kelurahan/Desa</label>
                    <input value="<?= $datakpm->kelurahan ?>" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" readonly placeholder="Masukan Nama Lengkap Disini">
                </div>
                <div class="col-12 mt-3 mb-3">
                    <label for="nama" class="h6">Kecamatan</label>
                    <input value="<?= $datakpm->kecamatan ?>" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" readonly placeholder="Masukan Nama Lengkap Disini">
                </div>
                <div class="col-12 mt-3 mb-3">
                    <label for="nama" class="h6">Kabupaten/Kota</label>
                    <input value="<?= $datakpm->kota_kabupaten ?>" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" readonly placeholder="Masukan Nama Lengkap Disini">
                </div>
                <div class="col-12">
                    <label for="nama" class="h6">Alamat Lengkap</label>
                    <textarea name="" id="" cols="30" rows="10" readonly class="form-control custom-shadow border-0 bg-white text-secondary px-4" type="text" style="height: 150px !important; font-size: 14px; border-radius: 25px;"><?= $datakpm->alamat ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>