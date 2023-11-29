<?php $this->extend('admin/layout') ?>
<?php $this->section('content') ?>

    <div class="row p-2">
        <div class="col-md-12 col-lg-12">
            <div class="card-body">
                <h6 class="card-title">List KPM</h6>
                <h6 class="card-subtitle">
                    Klik <a style="font-weight: bolder;" href="<?= base_url('owner/kasir/create') ?>">disini</a> untuk menambahkan data karyawan (kasir dan admin)
                </h6>
                <div class="table-responsive mt-5 h6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col" style="width: 10%;">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td><a href="">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title">List KPM</h5>
            <div class="table-responsive h6">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Desa/Kelurahan</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kota/Kabupaten</th>
                            <th scope="col" class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datakpm as $data) :
                        ?>
                            <tr>
                                <td><?= $data->nomor_cekpos ?></td>
                                <td><?= $data->nama_penerima ?></td>
                                <td><?= $data->kelurahan ?></td>
                                <td><?= $data->kecamatan ?></td>
                                <td><?= $data->kota_kabupaten ?></td>
                                <td class="text-center"><a href="<?= base_url('admin/kpm/detail/' . $data->id_kpm) ?>"><i class="fas fa-search-plus"></i></a></td>
                            </tr>
                        <?php
                        endforeach
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Cari Berdasarkan NIK</th>
                            <th>Cari Berdasarkan Nama</th>
                            <th>Cari Berdasarkan Desa</th>
                            <th>Cari Berdasarkan Kecamatan</th>
                            <th>Cari Berdasarkan Kabupaten</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

<?php $this->endSection() ?>