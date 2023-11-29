<?php $this->extend('admin/layout') ?>
<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title mb-3">List Admin Kecamatan</h5>
            <h6 class="card-subtitle">
                Klik <a style="font-weight: bolder;" href="<?= base_url('admin/ak/create-ak') ?>">disini</a> untuk menambahkan Admin Gudang
            </h6>
            <div class="table-responsive h6">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Nama Kecamatan</th>
                            <th scope="col" class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Foreeach -->
                        <?php
                        foreach ($dataAK as $data) :
                        ?>
                            <tr>
                                <td><?= $data->nik_admin_kecamatan ?></td>
                                <td><?= $data->nama_admin_kecamatan ?></td>
                                <td><?= $data->nama_kecamatan ?></td>
                                <td class="text-center"><a href="<?= base_url('admin/ak/edit-ak/' . $data->id_admin_kecamatan) ?>"><i class="fas fa-search-plus"></i></a></td>
                            </tr>
                        <?php
                        endforeach
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Cari Berdasarkan NIK</th>
                            <th>Cari Berdasarkan Nama</th>
                            <th>Cari Berdasarkan Lokasi</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>