<?php 
  include_once('../authen.php');
  if(!isset($_GET['id'])){
    header('Location:index.php');
  }
  $sql = "SELECT * FROM `articles` WHERE `id` = '".$_GET['id']."' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $arr_tag = explode(',', $row['tag']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Articles Management</title>
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
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Custom style -->
  <link rel="stylesheet" href="../../dist/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- bootstrap-toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  
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
            <h1>Articles Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="../articles">Articles Management</a></li>
              <li class="breadcrumb-item active">Update Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Update Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="update.php" method="post" enctype="multipart/form-data">
          <div class="card-body">

            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?php echo $row['subject']; ?>" required>
            </div>

            <div class="form-group">
              <label for="sub_title">Sub title</label>
              <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="Sub title" value="<?php echo $row['sub_title']; ?>" required>
            </div>

            <div class="form-group">
              <label>Upload Image</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              <figure class="figure text-center d-block mt-2">
                  <input type="hidden" name="data_file" value="<?php echo $row['image']; ?>">
                  <img id="imgUpload" src="../../../assets/images/blog/<?php echo $row['image']; ?>" class="figure-img img-fluid rounded" alt="">
              </figure>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  Create Contents
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool btn-sm"
                          data-widget="collapse"
                          data-toggle="tooltip"
                          title="Collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <textarea class="d-none" name="detail" id="detail" rows="10" cols="80">
                    <?php echo  str_replace('./', '../../../', $row['detail'] ); ?>
                  </textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Select a Tags</label>
              <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
                <option value="html" <?php echo in_array('html', $arr_tag) ? 'selected': ''; ?>>html</option>
                <option value="css" <?php echo in_array('css', $arr_tag) ? 'selected': ''; ?>>css</option>
                <option value="javascript" <?php echo in_array('javascript', $arr_tag) ? 'selected': ''; ?>>javascript</option>
                <option value="php" <?php echo in_array('php', $arr_tag) ? 'selected': ''; ?>>php</option>
                <option value="mysql" <?php echo in_array('mysql', $arr_tag) ? 'selected': ''; ?>>mysql</option>
              </select>
            </div>

            <input type="checkbox" name="status" <?php echo $row['status'] == 'true' ? 'checked': ''; ?> data-toggle="toggle" data-on="Active" data-off="Block" data-onstyle="success" data-style="ios">

            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

          </div>
          <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>    
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
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- CK Editor -->
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- bootstrap-toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });

    $('.custom-file-input').on('change', function(){
      var size = this.files[0].size / 1024 / 1024
      if(size.toFixed(2) > 2){
        alert('to big, maximum is 2MB')
      } else {
        var fileName = $(this).val().split('\\').pop()
        $(this).siblings('.custom-file-label').html(fileName)
        if (this.files[0]) {
            var reader = new FileReader()
            $('.figure').addClass('d-block')
            reader.onload = function (e) {
                $('#imgUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0])
        }
      }
    })

    //Initialize Select2 Elements
    $('.select2').select2()

    //CKEDITOR
    CKEDITOR.replace( 'detail' ,{
      filebrowserBrowseUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
      filebrowserUploadUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
      filebrowserImageBrowseUrl : '../../plugins/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });

  });
  
</script>

</body>
</html>
