<?php $this->extend('admingudang/layout') ?>
<?php $this->section('content') ?>

<div class="row p-2">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h6 class="card-title">Tambah Berita Acara</h6>
            <form action="<?= base_url('admingudang/beritaacara/item/add') ?>" method="post">
                <div class="row mt-4">
                    <div class="col-12 mt-3">
                        <label for="kode" class="h6">Kode Berita Acara</label>
                        <input id="kode" name="kode" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" placeholder="00000000" readonly value="<?= $kodeberitaacara ?>">
                    </div>
                    <div class="col-12 mt-3">
                        <label for="kota_kabupaten" class="h6">Kabupaten/Kota</label>
                        <select class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" id="kota_kabupaten" name="kota_kabupaten" type="text" style=" height: 50px !important; font-size: 14px;">
                        </select>
                    </div>
                    <div class="col-12 mt-3 d-none" id="fkecamatan">
                        <label for="kecamatan" class="h6">Kecamatan</label>
                        <select class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" id="kecamatan" name="kecamatan" type="text" style=" height: 50px !important; font-size: 14px;">
                        </select>
                    </div>
                    <div class="col-12 mt-3 d-none" id="fdesa">
                        <label for="desa" class="h6">Desa</label>
                        <select class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" id="desa" name="desa" type="text" style=" height: 50px !important; font-size: 14px;">
                        </select>
                    </div>
                    <div class="col-12 mt-3 d-none" id="fbobot">
                        <label for="bobot" class="h6">Jumlah Beras (Kg)</label>
                        <input id="bobot" name="bobot" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="number" style="height: 50px !important; font-size: 14px;" required placeholder="0">
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" style="height: 50px !important; font-size: 14px;" class="btn waves-effect custom-shadow waves-light btn-rounded btn-primary w-100">Tambahkan Item</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if ($tampilkanitem == true) {
?>
    <div class="row p-2">
        <div class="col-md-12 col-lg-12">
            <div class="card-body">
                <h6 class="card-title">Dalam Proses Pembuatan</h6>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="table-responsive h6">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col">Kabupaten</th>
                                        <th scope="col">Kecamatan</th>
                                        <th scope="col">Desa</th>
                                        <th scope="col">Jumlah Beras (Kg)</th>
                                        <th scope="col" class="text-center">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($item as $data) :
                                    ?>
                                        <tr>
                                            <td><?= $data->kabupaten_itemberitaacara ?></td>
                                            <td><?= $data->kecamatan_itemberitaacara ?></td>
                                            <td><?= $data->desa_itemberitaacara ?></td>
                                            <td><?= $data->bobot_itemberitaacara ?></td>
                                            <td class="text-center"><a href="<?= base_url('admingudang/beritaacara/item/delete/' . $data->id_itemberitaacara) ?>"><i class="fas fa-minus-circle"></i></a></td>
                                        </tr>
                                    <?php
                                    endforeach
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cari Berdasarkan Kabupaten</th>
                                        <th>Cari Berdasarkan Kecamatan</th>
                                        <th>Cari Berdasarkan Desa</th>
                                        <th>Cari Berdasarkan Jumlah</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <form action="<?= base_url('admingudang/beritaacara/add') ?>" method="post">
                            <input type="text" name="kode" id="kode" value="<?= $data->kodeberitaacara ?>" hidden>
                            <button type="submit" style="height: 50px !important; font-size: 14px;" class="btn waves-effect custom-shadow waves-light btn-rounded btn-primary w-100">Buat Berita Acara</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

<script>
    var opsinya = document.getElementById('kota_kabupaten');
    var opsinya2 = document.getElementById('kecamatan');
    var opsinya3 = document.getElementById('desa');
    var pkec = document.getElementById('fkecamatan');
    var pdes = document.getElementById('fdesa');
    var pbobot = document.getElementById('fbobot');
    var opsi = "";
    var opsi2 = "";
    var opsi3 = "";
    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/32.json`)
        .then(response => response.json())
        .then(regencies => {
            var data = regencies;
            data.forEach(element => {
                opsi = opsi + '<option data-kabupaten="' + element.id + '" value="' + element.name + '">' + element.name + '</option>'
            });
            opsinya.innerHTML = opsi;
        });
    $('#kota_kabupaten').on('change', function() {
        // ambil data dari elemen option yang dipilih
        const kab = $('#kota_kabupaten option:selected').data('kabupaten');
        opsi2 = "";
        pkec.classList.remove('d-none');
        pdes.classList.add('d-none');
        pbobot.classList.add('d-none');
        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/districts/' + kab + '.json')
            .then(response => response.json())
            .then(districts => {
                var data2 = districts;
                data2.forEach(element => {
                    opsi2 = opsi2 + '<option data-kecamatan="' + element.id + '" value="' + element.name + '">' + element.name + '</option>'
                });
                opsinya2.innerHTML = opsi2;
            });
    });
    $('#kecamatan').on('change', function() {
        // ambil data dari elemen option yang dipilih
        const kec = $('#kecamatan option:selected').data('kecamatan');
        opsi3 = "";
        pdes.classList.remove('d-none');
        pbobot.classList.remove('d-none');
        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/villages/' + kec + '.json')
            .then(response => response.json())
            .then(villages => {
                var data3 = villages;
                data3.forEach(element => {
                    opsi3 = opsi3 + '<option data-desa="' + element.id + '" value="' + element.name + '">' + element.name + '</option>'
                });
                opsinya3.innerHTML = opsi3;
            });
    });
</script>


<?php $this->endSection() ?>