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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Wasgar Apps</title>
    <!-- This page CSS -->    <!-- chartist CSS -->

    <link href="<?php echo base_url('assets/node_modules/morrisjs/morris.css');?>" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?php echo base_url('assets/node_modules/toast-master/css/jquery.toast.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/dist/css/style.min.css');?>" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url('assets/dist/css/pages/dashboard1.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css');?>" rel="stylesheet">
    <!-- page css -->
    <link href="<?php echo base_url('assets/dist/css/pages/user-card.css');?>" rel="stylesheet">
        <!-- chartist CSS -->
    <link href="<?php echo base_url('assets/node_modules/chartist-js/dist/chartist.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/node_modules/chartist-js/dist/chartist-init.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/node_modules/css-chart/css-chart.css');?>" rel="stylesheet">
    <!-- page css -->
    <link href="<?php echo base_url('assets/dist/css/pages/widget-page.css');?>" rel="stylesheet">
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
            <p class="loader__label">Wasgar Apps Kabalitbang</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" style="position: fixed;">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" style="height: 120px; background-image: url('https://cdn2.tstatic.net/bogor/foto/bank/images/bendera-merah-putih_20180817_152412.jpg'); background-size: 100% 125px;">
            <div class="row">
                <div class="col-md-2">
                    <div style="margin-left: 24px; margin-top: 12px;">
                        <a href="#">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Logo_of_the_Ministry_of_Defence_of_the_Republic_of_Indonesia.svg/200px-Logo_of_the_Ministry_of_Defence_of_the_Republic_of_Indonesia.svg.png" style="width: 100px; height:100px" alt="homepage" class="light-logo" />
                        </a>   
                    </div>
                </div>
                <div class="col-md-8">
                    <div style="margin-top: 40px; margin-left: 155px;"><b><font size="3" color="#c1c100">Badan Penelitian dan Pengembangan Kementerian Pertahanan Republik Indonesia</font></b></div>
                    <div style="margin-left: 10px;"><b><font size="3" color="#c1c100">Gedung Balitbang Kemhan RI, Jl. Jati No. 1 Pondok Labu Jakarta Selatan 12455 Daerah Khusus Ibukota Jakarta</b></font></div>
                    <div style="margin-left: 355px;"><b><font size="3" color="#c1c100">Telp: (021) 7552086 Fax. (021) 7554466</b></font></div>                    
                </div>
                <div class="col-md-2">
                    a
                </div>
            </div>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
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
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <div class="card" style="height: 100px;">
                        <div class="card-body" style="margin-top: -8px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <h3><i class="icons-Money"></i></h3>
                                    </div>
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <p class="text-muted">Pagu Anggaran</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h5 class="counter text-cyan">Rp 243929203000</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card" style="height: 100px;">
                        <div class="card-body" style="margin-top: -8px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <h3><i class="icons-Money"></i></h3> -->
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <p class="text-muted">Persentase</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h5 class="counter text-cyan">100%</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <p class="text-muted">Pakta Integritas/bulan</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h5 class="counter text-cyan">Rp 206952118969<!-- <?=$jml_pakta ?> --></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card" style="height: 100px;">
                        <div class="card-body" style="margin-top: -8px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <h3><i class="icons-Money-2"></i></h3> -->
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <p class="text-muted">Persentase</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h5 class="counter text-cyan">100%</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <!-- <h3><i class="icon-doc"></i></h3> -->
                                            <p class="text-muted">Aktual Realisasi</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h5 class="counter text-purple">Rp 240124263311 <!-- <?=$jml_realisasi ?>  --></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card" style="height: 100px;">
                        <div class="card-body" style="margin-top: -8px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="margin-top:10px;" class="d-flex no-block align-items-center">
                                        <img data-toggle="tooltip" data-placement="top" title="Kapuslitbang Strahan" src="<?php echo base_url('file/anggota/ArifHarnanto.jpg');?>" width="55">
                                        <img data-toggle="tooltip" data-placement="top" title="Kapuslitbang Alpalhan" src="<?php echo base_url('file/anggota/Rosidin.jpg');?>" width="55">
                                        <img data-toggle="tooltip" data-placement="top" title="Kapuslitbang Iptekhan" src="<?php echo base_url('file/anggota/BambangWijanarko.jpg');?>" width="55">
                                        <img data-toggle="tooltip" data-placement="top" title="Kapuslitbang Pussumdahan" src="<?php echo base_url('file/anggota/Martono.jpg');?>" width="55">
                                        <img data-toggle="tooltip" data-placement="top" title="Kapuslitbang Sekretariat" src="<?php echo base_url('file/anggota/AbdullahSani.jpg');?>" width="55">
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
                <div class="row" style="margin-top: -10px;">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex m-b-40 align-items-center no-block">
                                    <h5 class="card-title ">TREND REALISASI ANGGARAN PER BULAN</h5>
                                    <!-- <div class="ml-auto">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-circle text-cyan"></i> Iphone</li>
                                            <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                            <li><i class="fa fa-circle text-purple"></i> Ipod</li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div style="height: 315px;">
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 315px;
  margin-top: -50px;
}

</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_kelly);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Enable chart cursor
chart.cursor = new am4charts.XYCursor();
chart.cursor.lineX.disabled = true;
chart.cursor.lineY.disabled = true;

// Enable scrollbar
chart.scrollbarX = new am4core.Scrollbar();

// Add data
chart.data = [{
      "date": "2019-01-01",
      "pakta": 2810841849
  }, {
      "date": "2019-02-01",
      "pakta": 13605123459   
  }, {
      "date": "2019-03-01",
      "pakta": 25369733808      
  }, {
      "date": "2019-04-01",
      "pakta": 44725384090 
  }, {
      "date": "2019-05-01",
      "pakta": 61835155335 
  }, {
      "date": "2019-06-01",
      "pakta": 113545433155     
  }, {
      "date": "2019-07-01",
      "pakta": 126385555390     
  }, {
      "date": "2019-08-01",
      "pakta": 139784868145     
  }, {
      "date": "2019-09-01",
      "pakta": 143852112170     
  }, {
      "date": "2019-10-01",
      "pakta": 192439191379
  }, {
      "date": "2019-11-01",
      "pakta": 206952118969 
  }, {
      "date": "2019-12-01",
      "pakta":  240124263311 
  }];

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.dataFields.category = "Date";
dateAxis.renderer.grid.template.location = 0.5;
dateAxis.dateFormatter.inputDateFormat = "yyyy-MM-dd";
dateAxis.renderer.minGridDistance = 40;
dateAxis.tooltipDateFormat = "MMM dd, yyyy";
dateAxis.dateFormats.setKey("day", "dd");

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.tooltipText = "{date}\n[bold font-size: 17px]pakta: {valueY}[/]";
series.dataFields.valueY = "pakta";
series.dataFields.dateX = "date";
series.strokeDasharray = 3;
series.strokeWidth = 2
series.strokeOpacity = 0.3;
series.strokeDasharray = "3,3"

var bullet = series.bullets.push(new am4charts.CircleBullet());
bullet.strokeWidth = 2;
bullet.stroke = am4core.color("#fff");
bullet.setStateOnChildren = true;
bullet.propertyFields.fillOpacity = "opacity";
bullet.propertyFields.strokeOpacity = "opacity";

var hoverState = bullet.states.create("hover");
hoverState.properties.scale = 1.7;

function createTrendLine(data) {
  var trend = chart.series.push(new am4charts.LineSeries());
  trend.dataFields.valueY = "realisasi";
  trend.dataFields.dateX = "date";
  trend.strokeWidth = 2
  trend.stroke = trend.fill = am4core.color("#c00");
  trend.data = data;

  var bullet = trend.bullets.push(new am4charts.CircleBullet());
  bullet.tooltipText = "{date}\n[bold font-size: 17px]realisasi: {realisasi}[/]";
  bullet.strokeWidth = 2;
  bullet.stroke = am4core.color("#fff")
  bullet.circle.fill = trend.stroke;

  var hoverState = bullet.states.create("hover");
  hoverState.properties.scale = 1.7;

  return trend;
};

createTrendLine([
  { "date": "2019-01-01", "realisasi": 1548007177 },
  { "date": "2019-02-01", "realisasi": 5574805530 },
  { "date": "2019-03-01", "realisasi": 35581011978 },
  { "date": "2019-04-01", "realisasi": 42766433045 },
  { "date": "2019-05-01", "realisasi": 60442536211 },
  { "date": "2019-06-01", "realisasi": 85884993327 },
  { "date": "2019-07-01", "realisasi": 100304432572 },
  { "date": "2019-08-01", "realisasi": 118725796953 },
  { "date": "2019-09-01", "realisasi": 149763292354 },
  { "date": "2019-10-01", "realisasi": 156803535311 },
  { "date": "2019-11-01", "realisasi": 162808461530 },
  { "date": "2019-11-01", "realisasi": 0 }
]);

// var lastTrend = createTrendLine([
//   { "date": "2019-01-01", "value": 0 },
//   { "date": "2019-12-01", "value": 0 }
// ]);

// Initial zoom once chart is ready
// lastTrend.events.once("datavalidated", function(){
//   series.xAxis.zoomToDates(new Date(2019, 0, 2), new Date(2019, 0, 13));
// });

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <!-- Column VIDEO-->
                            <!-- Column -->
                            <div class="col-md-12" align="center">
                                <video width="auto" height="140px" controls="">
                                    <source src="http://localhost/wasgarapps/file/videokegiatan/video1.mp4" type="video/mp4">
                                </video>
                            </div>
                          <!--column end-->
                          <!-- column charts -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body ">
                                        <!-- amCharts javascript sources -->
        <script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
        <!-- amCharts javascript code -->
        <style>
            #chartdiv2 {
              width: 100%;
              height: a;
            }
        </style>
        <script>
        am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv2", am4charts.PieChart);

        // Add data
        chart.data = [ {
                            "satker": "PUSSTRAHAN",
                            "pakta": "93.75"
                        },
                        {
                            "satker": "PUSSUMDAHAN",
                            "pakta": "81.05"
                        },
                        {
                            "satker": "PUSALPALHAN",
                            "pakta": "70.45"
                        },
                        {
                            "satker": "PUSIPTEK",
                            "pakta": "88"
                        },
                        {
                            "satker": "SEKRETARIAT",
                            "pakta": "74.33"
                        } ];

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "pakta";
        pieSeries.dataFields.category = "satker";
        pieSeries.slices.template.stroke = am4core.color("#fff");
        pieSeries.slices.template.strokeWidth = 2;
        pieSeries.slices.template.strokeOpacity = 1;

        // This creates initial animation
        pieSeries.hiddenState.properties.opacity = 1;
        pieSeries.hiddenState.properties.endAngle = -90;
        pieSeries.hiddenState.properties.startAngle = -90;

        }); // end am4core.ready()
        </script>

        <div id="chartdiv2" style="width: 100%; height: 190px; background-color: #FFFFFF;" ></div>
                                    </div>
                                </div>
                            </div>
                          <!-- COLUMN CHARTS END -->
                            <style>
                                #myCarouse2 {
                                    height: 190px;
                                }
                            </style>
                          <!--column end-->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Comment - table -->
                <!-- ============================================================== -->
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
        <footer class="footer" style="padding: 0px 0px; margin-top: -4px; background: #1e88e5">
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
    <script src="<?php echo base_url(); ?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <!--morris JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/morrisjs/morris.min.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/node_modules/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url(); ?>assets/node_modules/echarts/echarts-all.js"></script>
    <!-- Flot Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/flot/excanvas.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/widget-charts.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo base_url(); ?>assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url(); ?>assets/dist/js/dashboard1.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script>
        $(function(){
            $('#chat, #msg, #comment, #todo').perfectScrollbar();
        });
    </script>
</body>

</html>