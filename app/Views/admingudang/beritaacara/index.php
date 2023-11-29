<?php $this->extend('admingudang/layout') ?>
<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title mb-3">List Berita Acara</h5>
            <h6 class="card-subtitle">
                Klik <a style="font-weight: bolder;" href="<?= base_url('admin/ag/create') ?>">disini</a> untuk menambahkan Berita Acara
            </h6>
            <div class="table-responsive h6">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nomor Berita Acara</th>
                            <th scope="col">Nama Lokasi Gudang</th>
                            <th scope="col" class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td class="text-center"><a href=""><i class="fas fa-search-plus"></i></a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Cari Berdasarkan Tanggal</th>
                            <th>Cari Berdasarkan Nomor Berita Acara</th>
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