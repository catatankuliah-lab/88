    <!DOCTYPE html>
    <html dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png') ?>">
        <title>Login | Logistic 88</title>
        <!-- Custom CSS -->
        <link href="<?= base_url('dist/css/style.min.css') ?>" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body style="background-color: #F0F5F9;">
        <div class="main-wrapper">
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url('<?= base_url('assets/img/bg.jpg') ?>') no-repeat center center;">
                <div class="auth-box row">
                    <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url('<?= base_url('assets/img/kantor-88.png') ?>')">
                    </div>
                    <div class="col-lg-5 col-md-7 bg-white">
                        <div class="p-3">
                            <div class="text-center pt-3 pb-2">
                                <img src="<?= base_url('assets/img/logo.png') ?>" alt="wrapkit" width="80%">
                            </div>
                            <h3 class="mt-4 text-start"><b>Login</b></h3>
                            <p class="" style="font-size: 12px;">Enter your username and password to login.</p>
                            <form class="mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="text-dark" for="username">Username</label>
                                            <input class="form-control" id="username" type="text" placeholder="enter your username">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="text-dark" for="password">Password</label>
                                            <input class="form-control" id="password" type="password" placeholder="enter your password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4 mb-5 text-center">
                                        <button type="button" class="btn btn-block btn-dark" onclick="login()">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
        </div>

        <script>
            function login() {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;

                if (username === "" || password === "") {
                } else if (username === "adminit" && password === "adminit") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Login berhasil!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {

                        window.location = "<?= base_url('admin') ?>";
                    })
                } else if (username === "admingudang" && password === "admingudang") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Login berhasil!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location = "<?= base_url('admingudang') ?>";
                    })

                } else {
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "Username atau Password salah!",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location = "<?= base_url('admin/login') ?>";
                    })
                }
            }
        </script>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?= base_url('assets/libs/popper.js/dist/umd/popper.min.js') ?>"></script>
        <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
            $(".preloader ").fadeOut();
        </script>
    </body>

    </html>