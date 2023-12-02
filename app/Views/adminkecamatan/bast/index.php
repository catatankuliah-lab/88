<?php $this->extend('adminkecamatan/layout'); ?>
<?php $this->section('content'); ?>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title mb-3">BAST</h5>
            <h6 class="card-subtitle">
                Klik <a style="font-weight: bolder;" href="<?= base_url('adminkecamatan/create') ?>">disini</a> untuk menambahkan BAST, atau klik <a style="font-weight: bolder;" href="<?= base_url('') ?>">disini</a> untuk upload berkas BAST,
            </h6>
            <div class="table-responsive h6">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Pembuatan</th>
                            <th scope="col">Desa</th>
                            <th scope="col" class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bast as $bast) : ?>
                            <tr>
                                <td><?= $bast->no_bast ?></td>
                                <td><?= $bast->tanggal_pembuatan_bast ?></td>
                                <td><?= $bast->kantor_serah ?></td>
                                <td class="text-center"><a href="<?= base_url('adminkecamatan/bast/detail/' . $bast->no_bast) ?>" class="btn btn-primary">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
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

<?php $this->endSection(); ?>