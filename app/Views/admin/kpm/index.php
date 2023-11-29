<?php $this->extend('admin/layout') ?>
<?php $this->section('content') ?>
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
</div>
<?php $this->endSection() ?>