

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/img/favicon.ico') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link href="<?= base_url('assets/css/fontgoogle.css') ?>" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="<?= base_url('assets/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap-icons.css') ?>" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
       
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="Homepage.php" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                      
        <form class="login100-form validate-form p-b-33 p-t-5"
        action="<?php echo site_url('login/ceklogin')?>" method="post" autocomplete="off">

        <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="username" placeholder="user name">
            <span class="focus-input100" data-placeholder="&#xe80f"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="password" name="pass" placeholder="password">
            <span class="focus-input100" data-placeholder="&#xe80f"></span>
        </div>

        <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
                Login
            </button>
        </div>
        </form>




    <!-- JavaScript Libraries -->
    <script src="<?= base_url ('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <script src="<?= base_url ('assets/lib/easing/easing.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url ('assets/js/main.js'); ?>"></script>
</body>

</html>