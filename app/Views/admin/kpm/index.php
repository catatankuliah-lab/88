<?php $this->extend('owner/layout') ?>
<?php $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card-body">
                <h4 class="card-title">List Pegawai</h4>
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
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>