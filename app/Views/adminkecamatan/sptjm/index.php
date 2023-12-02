<?php $this->extend('adminkecamatan/layout'); ?>
<?php $this->section('content'); ?>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title mb-3">List SPTJM</h5>
            <h6 class="card-subtitle">
                Klik <a style="font-weight: bolder;" href="<?= base_url('') ?>">disini</a> untuk menambahkan SPTJM, atau klik <a style="font-weight: bolder;" href="<?= base_url('') ?>">disini</a> untuk upload berkas SPTJM,
            </h6>
            <div class="table-responsive h6">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- forecah -->
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