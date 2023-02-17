<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Material Pro Lite Template by WrapPixel</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/materialpro-lite/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?=base_url('assets/images/favicon.png')?>"
    />
    <!-- chartist CSS -->
    <link
      href="<?=base_url('assets/plugins/chartist-js/dist/chartist.min.css')?>" 
      rel="stylesheet"
    />
    <link
      href="<?=base_url('assets/plugins/chartist-js/dist/chartist-init.css')?>"
      rel="stylesheet"
    />
    <link
      href="<?=base_url('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')?>"
      rel="stylesheet"
    />
    <!--This page css - Morris CSS -->
    <link href="<?= base_url('assets/plugins/c3-master/c3.min.css')?> " 
    rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/style.min.css') ?> " rel="stylesheet">
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand ms-4" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="<?=base_url('assets/images/logo-light-icon.png')?>"
                  alt="homepage"
                  class="dark-logo"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img
                  src="<?=base_url('assets/images/logo-light-text.png')?>"
                  alt="homepage"
                  class="dark-logo"
                />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a
              class="
                nav-toggler
                waves-effect waves-light
                text-white
                d-block d-md-none
              "
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <ul class="navbar-nav d-lg-none d-md-block">
              <li class="nav-item">
                <a
                  class="
                    nav-toggler nav-link
                    waves-effect waves-light
                    text-white
                  "
                  href="javascript:void(0)"
                  ><i class="ti-menu ti-close"></i
                ></a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto mt-md-0">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->

              <li class="nav-item search-box">
                <a class="nav-link text-muted" href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-3"></i
                ></a>
                <form class="app-search" style="display: none">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-close"></i></a>
                </form>
              </li>
            </ul>

            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                  "
                  href="#"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="<?php echo base_url('assets/images/users/1.jpg') ?>"
                    alt="user"
                    class="profile-pic m-r-10"
                  /><?php echo $this->session->userdata('user_name'); ?>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li>
                <a class="waves-effect waves-dark
                 <?php echo $this->uri->segment(1) =='dashboard' ?
                  'active' : '';?>" href="<?php echo site_url('beranda') ;?>" aria-expanded="false">
                  <i class="mdi mdi-gauge"></i
                  ><span class="hide-menu">Dashboard</span></a>
              </li>
              <br> 
              <li>
                <a class="waves-effect waves-dark
                 <?php echo $this->uri->segment(1) =='user_input' ?
                  'active' : '';?>" href="<?php echo site_url('user_input') ;?>" aria-expanded="false">
                  <i class="mdi mdi-account-check"></i
                  ><span class="hide-menu">Input Data</span></a>
              </li>
              <br>
              <li>
                <a class="waves-effect waves-dark
                 <?php echo $this->uri->segment(1) =='user_lihat' ?
                  'active' : '';?>" href="<?php echo site_url('user_lihat') ;?>" aria-expanded="false">
                  <i class="mdi mdi-table"></i
                  ><span class="hide-menu">Lihat Data</span></a>
              </li>
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <div class="sidebar-footer">
          <div class="row">
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href=""
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Settings"
                ><i class="mdi mdi-settings"></i
              ></a>
            </div>
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href=""
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Email"
                ><i class="mdi mdi-gmail"></i
              ></a>
            </div>
            <div class="col-4 link-wrap">
              <!-- item-->
              <a
                href=""
                class="link"
                data-toggle="tooltip"
                title=""
                data-original-title="Logout"
                ><i class="mdi mdi-power"></i
              ></a>
            </div>
          </div>
        </div>
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="page-title mb-0 p-0">Dashboard</h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Dashboard
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">
              <div class="text-end upgrade-btn">
                <a
                  href="https://www.wrappixel.com/templates/materialpro/"
                  class="btn btn-danger d-none d-md-inline-block text-white"
                  target="_blank"
                  >Upgrade to Pro</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- Start Page Content-->
        <!-- Row -->
        <div class="row">
            <!--column-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <form id="formModal" role="form" action="<?php echo site_url('user_input/tambah')?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="pass" id="pass" required>
                            </div>

                            <div class="form-group">
                                <label for="retypePass">Retype Password</label>
                                <input type="password" class="form-control" name="repass" id="repass" required>
                            </div>

                            <script>
                                              document.getElementById("repass").addEventListener("change", myFunction1);

                                              function myFunction1() {
                                                var pass = document.getElementById("pass");
                                                var pass2 = document.getElementById("repass");
                                                if(pass.value != pass2.value){
                                                   document.getElementById("buttonSubmit").disabled = true;
                                                   //document.getElementById("pass2").value="";
                                                   return alert('Kata sandi tidak sesuai!');

                                                } else {
                                                   document.getElementById("buttonSubmit").disabled = false;
                                                   return alert('Kata sandi sesuai!');
                                                }
                                              }
                                          </script>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" class="form-control" style="width: 100%;" required>
                                    <option value="null">--Select One--</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Dosen>">Dosen</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="number" class="form-control" name="telepon" required>
                            </div>
                            <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="buttonSubmit">Save Changes</button>
                        </div>
                    </form>
                    </div>
                </div>


      
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
          © 2021 Material Pro Admin by
          <a href="https://www.wrappixel.com/">wrappixel.com </a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url('assets/plugins/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/js/app-style-switcher.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('assets/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('assets/js/sidebarmenu.js')?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?=base_url('assets/plugins/chartist-js/dist/chartist.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')?>"></script>
    <!--c3 JavaScript -->
    <script src="<?=base_url('assets/plugins/d3/d3.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/c3-master/c3.min.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('assets/js/pages/dashboards/dashboard1.js')?>"></script>
    <script src="<?= base_url('assets/js/custom.js')?>"></script>
  </body>
</html>
