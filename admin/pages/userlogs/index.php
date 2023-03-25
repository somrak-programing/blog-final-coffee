<?php
  include_once('../authen.php'); 
  $sql = "SELECT * FROM userlogs ORDER BY id DESC";
  $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Userlog</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User logs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
            <div id="gwt-debug-realtime-title-panel" class="C2KYWWB-R-q" style=""><span class="C2KYWWB-R-r"></span> <span class="">อัปเดตโดยอัตโนมัติทุกๆ 10 วินาที</span></div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fa fa-bar-chart-o"></i>
                    ToTal Page
                    </h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="bar-chart-page" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 36px; text-align: center;">January</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 163px; text-align: center;">February</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 300px; text-align: center;">March</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 433px; text-align: center;">April</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 564px; text-align: center;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 691px; text-align: center;">June</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 266px; left: 8px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 199px; left: 8px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 133px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 67px; left: 1px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">20</div></div></div><canvas class="flot-overlay" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas></div>
                </div>
                <!-- /.card-body-->
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fa fa-bar-chart-o"></i>
                    Total Device
                    </h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="bar-chart-device" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 36px; text-align: center;">January</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 163px; text-align: center;">February</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 300px; text-align: center;">March</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 433px; text-align: center;">April</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 564px; text-align: center;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 691px; text-align: center;">June</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 266px; left: 8px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 199px; left: 8px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 133px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 67px; left: 1px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">20</div></div></div><canvas class="flot-overlay" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas></div>
                </div>
                <!-- /.card-body-->
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fa fa-bar-chart-o"></i>
                    Total OS
                    </h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="bar-chart-os" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 36px; text-align: center;">January</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 163px; text-align: center;">February</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 300px; text-align: center;">March</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 433px; text-align: center;">April</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 564px; text-align: center;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 691px; text-align: center;">June</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 266px; left: 8px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 199px; left: 8px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 133px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 67px; left: 1px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">20</div></div></div><canvas class="flot-overlay" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas></div>
                </div>
                <!-- /.card-body-->
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fa fa-bar-chart-o"></i>
                    Total Browser
                    </h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="bar-chart-browser" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 36px; text-align: center;">January</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 163px; text-align: center;">February</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 300px; text-align: center;">March</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 433px; text-align: center;">April</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 564px; text-align: center;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 127px; top: 280px; left: 691px; text-align: center;">June</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 266px; left: 8px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 199px; left: 8px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 133px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 67px; left: 1px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">20</div></div></div><canvas class="flot-overlay" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas></div>
                </div>
                <!-- /.card-body-->
                </div>
            </div>
        </div>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">User Logs</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>IP</th>
                    <th>Device</th>
                    <th>OS</th>
                    <th>Page</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $num = 0;
                  while($row = $result->fetch_assoc()){
                    $num++;
                ?>
                <tr>
                    <td><?php echo $num; ?></td>
                    <td><?php echo $row['ip']; ?></td>
                    <td><?php echo $row['device']; ?></td>
                    <td><?php echo $row['os']; ?></td>
                    <td><?php echo $row['page']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr  class="text-center">
                    <th>No.</th>
                    <th>IP</th>
                    <th>Device</th>
                    <th>OS</th>
                    <th>Page</th>
                    <th>Created</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- FLOT CHARTS -->
<script src="../../plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../../plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../../plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="../../plugins/flot/jquery.flot.categories.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.13.1/lodash.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });

    /*
     * BAR CHART
     * ---------
     */
    function getUserLogs () {
        $.get("../userlogs.php").done(function( resp ) {
            
            function mapsLogs (keyLog){
                return _.chain(resp.data).groupBy(keyLog).map(function(value, key) {
                    var count = _.values(_.countBy(value, keyLog))[0];
                    return [key +`(${count})` ,_.values(_.countBy(value, keyLog))[0]]
                }).value();
            }

            getPlot({
                data : mapsLogs('page'),
                color: '#3c8dbc'
            }, 'bar-chart-page')

            getPlot({
                data : mapsLogs('device'),
                color: '#3c8dbc'
            }, 'bar-chart-device')

            getPlot({
                data : mapsLogs('os'),
                color: '#3c8dbc'
            }, 'bar-chart-os')

            getPlot({
                data : mapsLogs('browser'),
                color: '#3c8dbc'
            }, 'bar-chart-browser')
        })
    }
    getUserLogs()
    setInterval(function(){
        getUserLogs()
    },10000)

    function getPlot (data, key){
        $setKey = '#' + key
        $.plot($setKey, [data], {
            grid  : {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor  : '#f3f3f3'
            },
            series: {
                bars: {
                show    : true,
                barWidth: 0.5,
                align   : 'center'
                }
            },
            xaxis : {
                mode      : 'categories',
                tickLength: 0
            }
        })
    }

    
</script>

</body>
</html>
