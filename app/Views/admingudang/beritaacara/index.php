<?php $this->extend('admingudang/layout') ?>
<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title mb-3">List Berita Acara</h5>
            <h6 class="card-subtitle">
                Klik <a style="font-weight: bolder;" href="<?= base_url('admingudang/beritaacara/create') ?>">disini</a> untuk menambahkan Berita Acara, atau klik <a style="font-weight: bolder;" href="<?= base_url('admingudang/beritaacara/scan') ?>">disini</a> untuk upload berkas Berita Acara,
            </h6>
            <div class="table-responsive h6">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($databeritaacara as $data) :
                        ?>
                            <tr>
                                <td><?= $data->tanggal_beritaacara_dibuat ?></td>
                                <td><?= $data->kode_beritaacara ?></td>
                                <td><?= $data->status_beritaacara ?></td>
                                <td class="text-center"><a href="<?= base_url('admingudang/beritaacara/detail/' . $data->kode_beritaacara) ?>"><i class="fas fa-search-plus"></i></a></td>
                            </tr>
                        <?php
                        endforeach
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Cari Berdasarkan Tanggal</th>
                            <th>Cari Berdasarkan Kode</th>
                            <th>Cari Berdasarkan Status</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>