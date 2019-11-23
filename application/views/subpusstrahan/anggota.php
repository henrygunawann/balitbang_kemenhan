<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"> -->
    <title>Wasgar Apps</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url('assets/node_modules/morrisjs/morris.css');?>" rel="stylesheet">
    <link href="../" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?php echo base_url('assets/node_modules/toast-master/css/jquery.toast.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/dist_sub/css/style.min.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/dist_sub/css/pages/dashboard1.css');?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="horizontal-nav skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                href="javascript:void(0)">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)">
                                <i class="icon-menu"></i>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Logo_of_the_Ministry_of_Defence_of_the_Republic_of_Indonesia.svg/200px-Logo_of_the_Ministry_of_Defence_of_the_Republic_of_Indonesia.svg.png" style="width: 50px; height:50px" alt="homepage" class="light-logo" />
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div>
                            <!-- <img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> -->
                        </div>
                                                    <a href="<?php echo base_url(); ?>subsatker/" class="u-dropdown link hide-menu" role="button" aria-haspopup="true" aria-expanded="false"><?php ($this->session->userdata('level')==='9');?><?php echo $this->session->userdata('username');?>
                            </a>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Data Satker
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/show_images">Detail Kegiatan </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/anggota">Detail Anggota</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatakmpnen">Input Data KMPNEN</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatakontrak">Input Data KONTRAK</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="ti-layout-grid2"></i>
                                <span class="hide-menu">Data Import</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="app-calendar.html">Komponen</a>
                                </li>
                                <li>
                                    <a href="app-chat.html">Kontrak</a>
                                </li>
                                <li>
                                    <a href="app-ticket.html">Ku42</a>
                                </li>
                                <li>
                                    <a href="app-contact.html">d_output</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">pppa</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">revpppa</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">revskop</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">revspp</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">d_spp</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">d_tepa</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">t_output</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
                                <i class="far fa-circle text-success"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <br />
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <img src="<?php echo base_url('file/anggota/kapustrahan.png');?>" alt="user" class="img-circle img-fluid">
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0">Laksma TNI Arif Harnanto, S.T., M.Eng.</h3> <small>Kapuslitbang Strahan</small>
                                    <!-- <address>
                                        795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                                        <br/>
                                        <br/>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <img src="<?php echo base_url('file/anggota/Hamid.png');?>" alt="user" class="img-circle img-fluid">
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0">Letkol Czi Abdul Hamid, SE</h3> <small>Kasubbag TU</small>
                                    <!-- <address>
                                        795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                                        <br/>
                                        <br/>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <img src="<?php echo base_url('file/anggota/AriesSetyani.png');?>" alt="user" class="img-circle img-fluid">
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0">Dra. Aries Setyani, M.Si.</h3> <small>Kabid Wilneg</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <img src="<?php echo base_url('file/anggota/Sianturi.png');?>" alt="user" class="img-circle img-fluid">
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0">Kol Tek BRP. Sianturi, M.BA.</h3> <small>Kabid Doksismet</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <img src="<?php echo base_url('file/anggota/Ernalem.png');?>" alt="user" class="img-circle img-fluid">
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0">DR. Dra. Ernalem Bangun, M.A.</h3> <small>Kabid Lingstra</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer" style="background: #1e88e5">
            <font color="white"><marquee>Selamat datang di web kemenhan</marquee></font>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist_sub/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/dist_sub/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/dist_sub/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist_sub/js/custom.min.js"></script>
        <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/node_modules/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url(); ?>assets/node_modules/echarts/echarts-all.js"></script>

    <!--morris JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/morrisjs/morris.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo base_url(); ?>assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url(); ?>assets/dist_sub/js/dashboard1.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/flot/excanvas.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/widget-charts.js"></script>
    <!-- Popup message jquery -->
    <script>
        $(function(){
            $('#chat, #msg, #comment, #todo').perfectScrollbar();
        });
    </script>
</body>

</html>