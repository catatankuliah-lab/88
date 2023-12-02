<?php $this->extend('admingudang/layout') ?>
<?php $this->section('content') ?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card-body">
            <h5 class="card-title mb-3">Detail Berita Acara</h5>
            <h6 class="card-subtitle">
                Klik <a style="font-weight: bolder;" href="<?= base_url('admingudang/beritaacara') ?>">disini</a> untuk kembali ke menu Berita Acara
            </h6>
            <div class="row mt-5">
                <div class="col-md-6 mx-auto">
                    <video id="preview" style="width: 100% !important; overflow: hidden !important;"></video>
                    <script type="text/javascript">
                        let opts = {
                            continuous: true,
                            video: document.getElementById('preview'),
                            mirror: true,
                            captureImage: false,
                            backgroundScan: true,
                            refractoryPeriod: 5000,
                            scanPeriod: 1
                        };
                        let scanner = new Instascan.Scanner({
                            video: document.getElementById('preview'),
                            mirror: false,
                        });
                        let result = scanner.scan();
                        scanner.addListener('scan', function(content) {
                            window.location.href = "<?= base_url('admingudang/beritaacara/detail/') ?>" + content;
                        });
                        Instascan.Camera.getCameras().then(function(cameras) {
                            if (cameras.length >= 0) {
                                scanner.start(cameras[0]);
                            } else {
                                console.error('No cameras found.');
                            }
                        }).catch(function(e) {
                            console.error(e);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>