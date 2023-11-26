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
                        <tr>
                            <td>123123123123123</td>
                            <td>Nama Lengkap KPM 1</td>
                            <td>Desa KPM 1</td>
                            <td>Kecamatan KPM 1</td>
                            <td>Kabupaten KPM 1</td>
                            <td class="text-center"><a href=""><i class="fas fa-search-plus"></i></a></td>
                        </tr>
                        <tr>
                            <td>123123123123123</td>
                            <td>Nama Lengkap KPM 1</td>
                            <td>Desa KPM 1</td>
                            <td>Kecamatan KPM 1</td>
                            <td>Kabupaten KPM 1</td>
                            <td class="text-center"><a href=""><i class="fas fa-search-plus"></i></a></td>
                        </tr>
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