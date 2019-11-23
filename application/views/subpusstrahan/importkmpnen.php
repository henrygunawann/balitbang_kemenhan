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
                                <span class="hide-menu">Data Kegiatan
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/show_images">Detail Kegiatan </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/anggota">Detail Anggota</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Data Import
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatakmpnen">Input Data KMPNEN</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatakontrak">Input Data KONTRAK</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdataku42">Input Data KU42</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdataoutput">Input Data OUTPUT</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatapppa">Input Data PPPA</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatarevpppa">Input Data REV PPPA</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatarevspp">Input Data REV SPP</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdataskop">Input Data SKOP</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatasoutput">Input Data SOUTPUT</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdataspp">Input Data SPP</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatatepa">Input Data TEPA</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>subsatker/inputdatatoutput">Input Data TOUTPUT</a>
                                </li>
                            </ul>
                        </li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Import Komponen</h4>
                                <?= form_open_multipart(); ?>
<!--                                 <form class="mt-4"> -->
                                    <div class="form-group">
                                        <label>Default file upload</label>
                                         <input type="file" name="excel" class="form-control">
                                         <span class="help-block"><small>kan file dengan extensi <strong>.xlsx</strong></small></span>
                                    </div>
                                    <div class="form-actions">
                                            <button type="submit" name="submit" value="upload"  class="btn btn-success"> Upload...</button>
                                    </div>
                                <?= form_close(); ?>
<!--                                 </form> -->
                            </div>
                        </div>
                    </div>
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