<?php $this->extend('admingudang/layout') ?>
<?php $this->section('content') ?>
<div class="row p-2">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title">Detail Berita Acara</h5>
            <h6 class="card-subtitle">
                Klik <a style="font-weight: bolder;" href="<?= base_url('admingudang/beritaacara') ?>">disini</a> untuk kembali ke menu Berita Acara
            </h6>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="table-responsive h6">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal Pembuatan</th>
                                    <th scope="col">Kabupaten</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Desa</th>
                                    <th scope="col">Jumlah Beras (Kg)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($databeritaacara as $data) :
                                ?>
                                    <tr>
                                        <td><?= $data->tanggal_beritaacara_dibuat ?></td>
                                        <td><?= $data->kabupaten_itemberitaacara ?></td>
                                        <td><?= $data->kecamatan_itemberitaacara ?></td>
                                        <td><?= $data->desa_itemberitaacara ?></td>
                                        <td><?= $data->bobot_itemberitaacara ?></td>
                                    </tr>
                                <?php
                                endforeach
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Cari Berdasarkan Tanggal</th>
                                    <th>Cari Berdasarkan Kabupaten</th>
                                    <th>Cari Berdasarkan Kecamatan</th>
                                    <th>Cari Berdasarkan Desa</th>
                                    <th>Cari Berdasarkan Jumlah</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <embed src="<?= base_url('pdf/beritaacara/' . $data->namapdf) ?>" type="application/pdf" width="100%" height="800px">
                    <!-- <form action="<?= base_url('admingudang/beritaacara/add') ?>" method="post">
                        <input type="text" name="kode" id="kode" value="<?= $data->kodeberitaacara ?>" hidden>
                        <button type="submit" style="height: 50px !important; font-size: 14px;" class="btn waves-effect custom-shadow waves-light btn-rounded btn-primary w-100">PDF Berita Acara</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>