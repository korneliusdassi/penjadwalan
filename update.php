<?php
include_once "koneksi.php";

$id=htmlspecialchars($_GET["id"]);
if(isset($_POST["update"])){
  if(update($_POST) > 0){
    echo "
            <script>
               alert('data berhasil ditambah!');
               document.location.href = 'index.php';
            </script>";
  }else{
    echo "
            <script>
               alert('data gagal ditambah!');
               document.location.href = 'index.php';
            </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- Main Sidebar Container -->
<?php
  include "menu.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card-header">
          <h3 class="card-title">Form Update</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form method="POST">
            <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Hari</label>
                  <input type="text" name="hari" class="form-control" placeholder="Enter ..." required>
                </div>
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <select name="namasiswa" class="form-control" required>
                    <?php                 
                      $data = mysqli_query($kon,"SELECT * FROM jadwal");
                      while($rows= mysqli_fetch_array($data)):
                          $rows["id_siswa"];
                          $rows["id"];  
                      ?>
                      <option value="<?=$rows['id'];?>"><?=$rows["id_siswa"];?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Mapel</label>
                  <select name="namapel" class="form-control" required>
                    <?php                 
                      $data = mysqli_query($kon,"SELECT * FROM jadwal");
                      while($rows= mysqli_fetch_array($data)):
                          $rows["id_mapel"];
                          $rows["id"];  
                      ?>
                      <option value="<?=$rows['id'];?>"><?=$rows["id_mapel"];?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                  <label>Nama Kelas</label>
                  <select name="kelas" class="form-control" required>
                    <?php                 
                      $data = mysqli_query($kon,"SELECT * FROM jadwal");
                      while($rows= mysqli_fetch_array($data)):
                          $rows["id_kelas"];
                          $rows["id"];  
                      ?>
                      <option value="<?=$rows['id_kelas'];?>"><?=$rows["id_kelas"];?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Guru</label>
                  <select name="guru" class="form-control" required>
                    <?php                 
                      $data = mysqli_query($kon,"SELECT * FROM jadwal");
                      while($rows= mysqli_fetch_array($data)):
                          $rows["id_guru"];
                          $rows["id"];  
                      ?>
                      <option value="<?=$rows['id'];?>"><?=$rows["id_guru"];?></option>
                    <?php endwhile; ?>
                  </select>
                </div>
            </div>
            <div>
              <!-- <input type="hidden" name="id" value=<?= htmlspecialchars( $_GET["id"])?>> -->
              <button type="submit" name="update" class="btn btn-block btn-success">Update</button>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
