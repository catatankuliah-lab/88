<?php $this->extend('admin/layout') ?>
<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title mb-3">List Admin Gudang</h5>
            <h6 class="card-subtitle">
                Klik <a style="font-weight: bolder;" href="<?= base_url('admin/ag/create') ?>">disini</a> untuk menambahkan Admin Gudang
            </h6>
            <div class="table-responsive h6">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Nama dan Lokasi Gudang</th>
                            <th scope="col" class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dataAG as $data) :
                        ?>
                            <tr>
                                <td><?= $data->nik_admin_gudang ?></td>
                                <td><?= $data->nama_admin_gudang ?></td>
                                <td><?= $data->nama_dan_lokasi_gudang ?></td>
                                <td class="text-center"><a href="<?= base_url('admin/ag/detail/1') ?>"><i class="fas fa-search-plus"></i></a></td>
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