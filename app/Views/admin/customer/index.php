<?php $this->extend('owner/layout') ?>
<?php $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card-body">
                <h4 class="card-title">List Customer</h4>
                <h6 class="card-subtitle">
                    Terimakasih, Pelanggan Terbaik!
                </h6>
                <div class="table-responsive mt-5 h6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px;" scope="col" class="font-weight-bold">No</th>
                                <th scope="col" class="font-weight-bold">Nama Lengkap</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <p class="font-weight-bold">Nama Lengkap</p>
                                    <p class="text-muted">Alamat dan Nomor Telpon</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>