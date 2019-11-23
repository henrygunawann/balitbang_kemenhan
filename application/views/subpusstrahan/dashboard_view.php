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
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <!-- <h3><i class="icon-screen-desktop"></i></h3> -->
                                            <p class="text-muted">Kapus Satker</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h4 class="counter text-primary">Nama Kapus</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <!-- <h3><i class="icon-note"></i></h3> -->
                                            <p class="text-muted">Pagu Anggaran</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h4 class="counter text-cyan">Rp </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <!-- <h3><i class="icon-doc"></i></h3> -->
                                            <p class="text-muted">Realisasi</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h4 class="counter text-purple">Rp 2073553514</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <!-- <h3><i class="icon-bag"></i></h3> -->
                                            <p class="text-muted">Renstra</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h4 class="counter text-success">2020 - 2024</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                       
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-40 align-items-center no-block">
                                <ul class="nav nav-tabs profile-tab" role="tablist">
                                  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Graph Pakta Integritas</a> </li>
                                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Detail Kegiatan Satker</a> </li>
                                </ul>
                                </div>
                                <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                  <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex m-b-40 align-items-center no-block">
                                                <h4 class="card-title">Responsive Table </h4>
                                                <div class="ml-auto">
                                                    <ul class="list-inline font-12">
                                                        <li><i class="fa fa-circle text-cyan"></i> Iphone</li>
                                                        <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                                        <li><i class="fa fa-circle text-purple"></i> Ipod</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="morris-area-chart"></div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Responsive Table </h4>
                                                <h6 class="card-subtitle">Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive </code></h6>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Invoice</th>
                                                                <th>User</th>
                                                                <th>Date</th>
                                                                <th>Amount</th>
                                                                <th>Status</th>
                                                                <th>Country</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><a href="javascript:void(0)">Order #26589</a></td>
                                                                <td>Herman Beck</td>
                                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
                                                                <td>$45.00</td>
                                                                <td>
                                                                    <div class="label label-table label-success">Paid</div>
                                                                </td>
                                                                <td>EN</td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0)">Order #58746</a></td>
                                                                <td>Mary Adams</td>
                                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2017</span> </td>
                                                                <td>$245.30</td>
                                                                <td>
                                                                    <div class="label label-table label-danger">Shipped</div>
                                                                </td>
                                                                <td>CN</td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0)">Order #98458</a></td>
                                                                <td>Caleb Richards</td>
                                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> May 18, 2017</span> </td>
                                                                <td>$38.00</td>
                                                                <td>
                                                                    <div class="label label-table label-info">Shipped</div>
                                                                </td>
                                                                <td>AU</td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="javascript:void(0)">Order #32658</a></td>
                                                                <td>June Lane</td>
                                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> Apr 28, 2017</span> </td>
                                                                <td>$77.99</td>
                                                                <td>
                                                                    <div class="label label-table label-success">Paid</div>
                                                                </td>
                                                                <td>FR</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-md-12">
                                <div class="card bg-cyan text-white">
                                    <div class="card-body ">
                                        <center><div id="m-piechart" style="width:100px; height:100px"></div>
                                        
                                            <ul class="list-inline m-t-20">
                                                <li>
                                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Mobile</h6> </li>
                                                <li>
                                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-primary"></i>Desktop</h6> </li>
                                                <li>
                                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-danger"></i>Tablet</h6> </li>
                                                <li>
                                                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-muted"></i>Other</h6> </li>
                                            </ul>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-12">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <div id="myCarouse2" class="carousel slide" data-ride="carousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="d-flex no-block">
                                                    <img src="<?php echo base_url('assets/images/big/img3.jpg');?>" alt="user" width="250">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="d-flex no-block">
                                                    <img src="<?php echo base_url('assets/images/big/img3.jpg');?>" alt="user" width="250">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="d-flex no-block">
                                                    <img src="<?php echo base_url('assets/images/big/img3.jpg');?>" alt="user" width="250">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
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