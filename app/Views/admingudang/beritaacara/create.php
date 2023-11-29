<?php $this->extend('admingudang/layout') ?>
<?php $this->section('content') ?>

<div class="row p-2">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h6 class="card-title">Tambah Berita Acara</h6>
            <div class="row mt-4">
                <div class="col-12">
                    <label for="kota_kabupaten" class="h6">Kabupaten/Kota</label>
                    <select class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" id="kota_kabupaten" name="kota_kabupaten" type="text" style=" height: 50px !important; font-size: 14px;">
                    </select>
                </div>
                <div class="col-12 mt-3 d-none" id="fkecamatan">
                    <label for="kecamatan" class="h6">Kecamatan</label>
                    <select class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" id="kecamatan" name="kecamatan" type="text" style=" height: 50px !important; font-size: 14px;">
                    </select>
                </div>
                <div class="col-12 mt-3">
                    <button type="button" style="height: 50px !important; font-size: 14px;" class="btn waves-effect custom-shadow waves-light btn-rounded btn-primary w-100">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var opsinya = document.getElementById('kota_kabupaten');
    var opsinya2 = document.getElementById('kecamatan');
    var opsinya3 = document.getElementById('desa');
    var pkec = document.getElementById('fkecamatan');
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
</script>


<?php $this->endSection() ?>