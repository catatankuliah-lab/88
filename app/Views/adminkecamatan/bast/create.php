<?php $this->extend('adminkecamatan/layout'); ?>
<?php $this->section('content'); ?>

<div class="row p-2">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h6 class="card-title">Tambah Berita Acara</h6>
            
            <form action="<?= base_url('adminkecamatan/bast/add') ?>" method="post">

                <div class="row mt-4">
                    <div class="col-12 mt-3">
                        <label for="kode" class="h6">No BAST</label>
                        <input id="kode" name="kode" class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" type="text" style="height: 50px !important; font-size: 14px;" placeholder="00000000" readonly value="" required>
                    </div>
                    <div class="col-12 mt-3">
                        <label for="desa" class="h6">Kelurahan/Desa</label>
                        <select class="form-control custom-shadow custom-radius border-0 bg-white text-secondary px-4" id="desa" name="desa" type="text" style=" height: 50px !important; font-size: 14px;">
                        </select>
                    </div>

                    <div class="col-12 mt-5">
                        <button type="submit" style="height: 50px !important; font-size: 14px;" class="btn waves-effect custom-shadow waves-light btn-rounded btn-primary w-100">Buat BAST</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    var opsinya = document.getElementById('desa');
    var opsi = '<option value=" Pilih Desa / Kelurahan">Pilih Desa/Kelurahan</option>';

    fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/3208100.json`)
        .then(response => response.json())
        .then(villages => {
            var data = villages;
            data.forEach(element => {
                opsi = opsi + '<option data-no_bast="' + element.id + '" value="' + element.name + '">' + element.name + '</option>'
            });
            opsinya.innerHTML = opsi;
        });
    $('#desa').on('change', function() {
        // ambil data dari elemen option yang dipilih
        const desa2 = $('#desa option:selected').data('no_bast');
        $("#kode").val(desa2);
    });
</script>

<?php echo $this->endSection(); ?>