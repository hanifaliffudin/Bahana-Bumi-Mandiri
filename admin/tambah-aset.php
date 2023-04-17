<?php 
session_start();  
if(isset($_SESSION["username"])){
  $username = $_SESSION["username"];
}else{
  header("location:login.php");  
}
include('crud.php');
$lib = new Aset();
if(isset($_POST['submit-btn'])){
    $icon = file_get_contents($_FILES["icon"]["tmp_name"]);
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
 
    $add_aset = $lib->add_data($icon, $nama, $jumlah);
    if($add_aset){
    header('Location: index-aset.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly"
    />
    <meta
      name="keywords"
      content="bootstrap, admin, dashboard, flat admin template, responsive,"
    />
    <title>BBM Admin Panel</title>
<link
      rel="shortcut icon"
      href="/assets/img/favicon-bbm.ico"
      type="image/x-icon"
    />

    <!-- ========== Css Files ========== -->
    <link href="css/root.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Start Page Loading -->
    <div class="loading"><img src="img/loading.gif" alt="loading-img" /></div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START TOP -->
    <div id="top" class="clearfix">
      <!-- Start App Logo -->
      <div class="applogo">
        <a href="index" class="logo">BBM</a>
      </div>
      <!-- End App Logo -->

      <!-- Start Sidebar Show Hide Button -->
      <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
      <a href="#" class="sidebar-open-button-mobile"
        ><i class="fa fa-bars"></i
      ></a>
      <!-- End Sidebar Show Hide Button -->

      <!-- Start Searchbox -->
      
      <!-- End Searchbox -->

      <!-- Start Top Menu -->
      <ul class="topmenu">
        <li><a href="#">Files</a></li>
        <li><a href="#">Authors</a></li>
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle"
            >My Files <span class="caret"></span
          ></a>
          <ul class="dropdown-menu">
            <li><a href="#">Videos</a></li>
            <li><a href="#">Pictures</a></li>
            <li><a href="#">Blog Posts</a></li>
          </ul>
        </li>
      </ul>
      <!-- End Top Menu -->

      <!-- Start Sidepanel Show-Hide Button -->
       
      <!-- End Sidepanel Show-Hide Button -->

      <!-- Start Top Right -->
      <ul class="top-right">
        

        

        <li class="dropdown link">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"
            ><img src="img/profileimg.png" alt="img" /><b><?php echo $username ?></b
            ><span class="caret"></span
          ></a>
          <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
            
            <li>
              <a href="logout.php"><i class="fa falist fa-power-off"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- End Top Right -->
    </div>
    <!-- END TOP -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START SIDEBAR -->
     <div class="sidebar clearfix">
      <ul class="sidebar-panel nav">
        <li class="sidetitle">MAIN</li>
        <li>
          <a href="#"
            ><span class="icon color5"><i class="fa fa-users"></i></span
            >Tentang Kami<span class="caret"><span class="label label-default"></span></a
          >
          <ul>
            <li><a href="tentang-kami.php">Tentang Kami</a></li>
            <li><a href="visi.php">Visi</a></li>
            <li><a href="index-misi.php">Misi</a></li>
            <!-- <li><a href="nilai.php">Nilai-Nilai Perusahaan</a></li> -->
            <li><a href="tagline.php">Tagline</a></li>
            <li><a href="index-k3l.php">K3L</a></li>
            <li><a href="index-aset.php">Aset</a></li>
            <li><a href="index-manajemen.php">Manajemen</a></li>
          </ul>
        </li>
        <li>
          <a href="#"
            ><span class="icon color5"><i class="fa fa-briefcase"></i></span
            >Karir<span class="caret"><span class="label label-default"></span></a
          >
          <ul>
            <li><a href="index-karir.php">Tabel Lowongan</a></li>
            <li><a href="tambah-karir.php">Tambah Lowongan</a></li>
          </ul>
        </li>
        <li>
          <a href="#"
            ><span class="icon color6"><i class="fa fa-building"></i></span
            >Proyek<span class="caret"><span class="label label-default"></span></a
          >
          <ul>
            <li><a href="index-proyek.php">Tabel Proyek</a></li>
            <li><a href="tambah-proyek.php">Tambah Proyek</a></li>
          </ul>
        </li>
          
          </ul>
        </li>
      </ul>
    </div>
    <!-- END SIDEBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <div class="content">
      <!-- Start Page Header -->
      <div class="page-header">
        <h1 class="title">Proyek</h1>
         

        <!-- Start Page Header Right Div -->
        
        <!-- End Page Header Right Div -->
      </div>
      <!-- End Page Header -->

      <!-- Start Presentation -->
      <div class="row presentation">
        <div class="col-lg-8 col-md-6 titles">
          <h1>aset</h1>
          <!-- <h4>Responsive and user-friendly Proyek</h4> -->
        </div>
      </div>
      <!-- End Presentation -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTAINER -->
      <div class="container-padding">
        <!-- Start Row -->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-title">
                Detail Manajer
                <ul class="panel-tools">
                  <li>
                    <a class="icon minimise-tool"
                      ><i class="fa fa-minus"></i
                    ></a>
                  </li>
                  <li>
                    <a class="icon expand-tool"><i class="fa fa-expand"></i></a>
                  </li>
                </ul>
              </div>

              <div class="panel-body">
                <form
                  id="form-proyek"
                  method="POST"
                  class="form-horizontal"
                  enctype="multipart/form-data"
                >

                <div class="form-group">
                  <label for="icon" class="col-sm-2 control-label form-label">Icon</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="icon" name="icon" accept="image/*">
                  </div>
                </div>

                  <div class="form-group">
                    <label
                      for="nama"
                      class="col-sm-2 control-label form-label"
                      >Nama</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="text"
                        class="form-control"
                        id="nama"
                        name="nama"
                        required
                      />
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label
                      for="jumlah"
                      class="col-sm-2 control-label form-label"
                      >jumlah</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="number"
                        class="form-control"
                        id="jumlah"
                        name="jumlah"
                        required
                      />
                    </div>
                  </div>

                 
                   
                  <button type="submit" name="submit-btn" class="btn btn-default">
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- END CONTAINER -->
      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- Start Footer -->
      <div class="row footer">
        <div class="col-md-6 text-left">
          Copyright © 2015
          <a
            href="http://themeforest.net/user/bragher/portfolio"
            target="_blank"
            >Bragher</a
          >
          All rights reserved.
        </div>
        <div class="col-md-6 text-right">
          Design and Developed by
          <a
            href="http://themeforest.net/user/bragher/portfolio"
            target="_blank"
            >Bragher</a
          >
        </div>
      </div>
      <!-- End Footer -->
    </div>
    <!-- End Content -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- ================================================
jQuery Library
================================================ -->
    <script src="js/jquery.min.js"></script>

    <!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
    <script src="js/plugins.js"></script>

    <!-- ================================================
Bootstrap Select
================================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>

    <!-- ================================================
Bootstrap Toggle
================================================ -->
    <script src="js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- ================================================
Moment.js
================================================ -->
    <script src="js/moment/moment.min.js"></script>

    <!-- ================================================
Bootstrap Date Range Picker
================================================ -->
    <script src="js/date-range-picker/daterangepicker.js"></script>

    <!-- main file -->
    <script src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
    <!-- bootstrap file -->
    <script src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

    <!-- ================================================Summernote================================================ -->
    <script src="js/summernote/summernote.min.js"></script>

    <script>
      /* BOOTSTRAP WYSIHTML5 */
      $(".textarea").wysihtml5();

      /* SUMMERNOTE*/
      $(document).ready(function () {
        $("#summernote").summernote();
      });
    </script>
  </body>
</html>
