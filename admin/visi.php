<?php
session_start();  
if(isset($_SESSION["username"])){
  $username = $_SESSION["username"];
}else{
  header("location:login.php");  
}
include "../dbconnect.php";
if(isset($_POST['update-btn'])){
    $visi = $_POST['visi'];
    $penjelasan = $_POST['penjelasan'];

    $query = $db->prepare('UPDATE visi set visi=?,penjelasan=?');
        
    $query->bindParam(1, $visi);
    $query->bindParam(2, $penjelasan);

    $query->execute();
    if($query)
    {
        header('Location:visi.php');
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
    <!-- <div class="loading"><img src="img/loading.gif" alt="loading-img" /></div> -->
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
            ><img src="img/profileimg.png" alt="img" /><b> <?php echo $username ?></b
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
        <h1 class="title">Visi</h1>
         

        <!-- Start Page Header Right Div -->
        
        <!-- End Page Header Right Div -->
      </div>
      <!-- End Page Header -->

      <!-- Start Presentation -->
      <div class="row presentation">
        <div class="col-lg-8 col-md-6 titles">
          <h1>Visi</h1>
          <!-- <h4>Responsive and user-friendly proyek</h4> -->
        </div>
      </div>
      <!-- End Presentation -->
        <?php
        $query = $db->prepare("SELECT * FROM visi");
        $query->execute();
        $data = $query->fetch();
        ?>
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTAINER -->
      <div class="container-padding">
        <!-- Start Row -->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-title">
                Visi
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
                <form method="POST" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-2 control-label form-label"
                      >Visi</label
                    >
                    <div class="col-sm-10">
                      <p>
                        <textarea
                          class="textarea form-control wysihtml5-textarea"
                          style="height: 200px; width: 100%;"
                          id="visi"
                          name="visi"
                        >
                        <?php echo $data['visi']; ?>
                        </textarea>
                      </p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label form-label"
                      >Penjelasan Visi</label
                    >
                    <div class="col-sm-10">
                      <p>
                        <textarea
                          class="textarea form-control wysihtml5-textarea"
                          style="height: 200px; width: 100%;"
                          id="penjelasan"
                          name="penjelasan"
                        >
                        <?php echo $data['penjelasan']; ?>
                        </textarea>
                      </p>
                    </div>
                  </div>

                  <button type="submit" name="update-btn" class="btn btn-default">
                    Update
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
    <!-- START SIDEPANEL -->
    <div role="tabpanel" class="sidepanel">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
          <a href="#today" aria-controls="today" role="tab" data-toggle="tab"
            >TODAY</a
          >
        </li>
        <li role="presentation">
          <a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab"
            >TASKS</a
          >
        </li>
        <li role="presentation">
          <a href="#chat" aria-controls="chat" role="tab" data-toggle="tab"
            >CHAT</a
          >
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Start Today -->
        <div role="tabpanel" class="tab-pane active" id="today">
          <div class="sidepanel-m-title">
            Today
            <span class="left-icon"
              ><a href="#"><i class="fa fa-refresh"></i></a
            ></span>
            <span class="right-icon"
              ><a href="#"><i class="fa fa-file-o"></i></a
            ></span>
          </div>

          <div class="gn-title">NEW</div>

          <ul class="list-w-title">
            <li>
              <a href="#">
                <span class="label label-danger">ORDER</span>
                <span class="date">9 hours ago</span>
                <h4>New Jacket 2.0</h4>
                Etiam auctor porta augue sit amet facilisis. Sed libero nisi,
                scelerisque.
              </a>
            </li>
            <li>
              <a href="#">
                <span class="label label-success">COMMENT</span>
                <span class="date">14 hours ago</span>
                <h4>Bill Jackson</h4>
                Etiam auctor porta augue sit amet facilisis. Sed libero nisi,
                scelerisque.
              </a>
            </li>
            <li>
              <a href="#">
                <span class="label label-info">MEETING</span>
                <span class="date">at 2:30 PM</span>
                <h4>Developer Team</h4>
                Etiam auctor porta augue sit amet facilisis. Sed libero nisi,
                scelerisque.
              </a>
            </li>
            <li>
              <a href="#">
                <span class="label label-warning">EVENT</span>
                <span class="date">3 days left</span>
                <h4>Birthday Party</h4>
                Etiam auctor porta augue sit amet facilisis. Sed libero nisi,
                scelerisque.
              </a>
            </li>
          </ul>
        </div>
        <!-- End Today -->

        <!-- Start Tasks -->
        <div role="tabpanel" class="tab-pane" id="tasks">
          <div class="sidepanel-m-title">
            To-do List
            <span class="left-icon"
              ><a href="#"><i class="fa fa-pencil"></i></a
            ></span>
            <span class="right-icon"
              ><a href="#"><i class="fa fa-trash"></i></a
            ></span>
          </div>

          <div class="gn-title">TODAY</div>

          <ul class="todo-list">
            <li class="checkbox checkbox-primary">
              <input id="checkboxside1" type="checkbox" /><label
                for="checkboxside1"
                >Add new products</label
              >
            </li>

            <li class="checkbox checkbox-primary">
              <input id="checkboxside2" type="checkbox" /><label
                for="checkboxside2"
                ><b>May 12, 6:30 pm</b> Meeting with Team</label
              >
            </li>

            <li class="checkbox checkbox-warning">
              <input id="checkboxside3" type="checkbox" /><label
                for="checkboxside3"
                >Design Facebook page</label
              >
            </li>

            <li class="checkbox checkbox-info">
              <input id="checkboxside4" type="checkbox" /><label
                for="checkboxside4"
                >Send Invoice to customers</label
              >
            </li>

            <li class="checkbox checkbox-danger">
              <input id="checkboxside5" type="checkbox" /><label
                for="checkboxside5"
                >Meeting with developer team</label
              >
            </li>
          </ul>

          <div class="gn-title">TOMORROW</div>
          <ul class="todo-list">
            <li class="checkbox checkbox-warning">
              <input id="checkboxside6" type="checkbox" /><label
                for="checkboxside6"
                >Redesign our company blog</label
              >
            </li>

            <li class="checkbox checkbox-success">
              <input id="checkboxside7" type="checkbox" /><label
                for="checkboxside7"
                >Finish client work</label
              >
            </li>

            <li class="checkbox checkbox-info">
              <input id="checkboxside8" type="checkbox" /><label
                for="checkboxside8"
                >Call Johnny from Developer Team</label
              >
            </li>
          </ul>
        </div>
        <!-- End Tasks -->

        <!-- Start Chat -->
        <div role="tabpanel" class="tab-pane" id="chat">
          <div class="sidepanel-m-title">
            Friend List
            <span class="left-icon"
              ><a href="#"><i class="fa fa-pencil"></i></a
            ></span>
            <span class="right-icon"
              ><a href="#"><i class="fa fa-trash"></i></a
            ></span>
          </div>

          <div class="gn-title">ONLINE MEMBERS (3)</div>
          <ul class="group">
            <li class="member">
              <a href="#"
                ><img src="img/profileimg.png" alt="img" /><b>Allice Mingham</b
                >Los Angeles</a
              ><span class="status online"></span>
            </li>
            <li class="member">
              <a href="#"
                ><img src="img/profileimg2.png" alt="img" /><b>James Throwing</b
                >Las Vegas</a
              ><span class="status busy"></span>
            </li>
            <li class="member">
              <a href="#"
                ><img src="img/profileimg3.png" alt="img" /><b
                  >Fred Stonefield</b
                >New York</a
              ><span class="status away"></span>
            </li>
            <li class="member">
              <a href="#"
                ><img src="img/profileimg4.png" alt="img" /><b
                  >Chris M. Johnson</b
                >California</a
              ><span class="status online"></span>
            </li>
          </ul>

          <div class="gn-title">OFFLINE MEMBERS (8)</div>
          <ul class="group">
            <li class="member">
              <a href="#"
                ><img src="img/profileimg5.png" alt="img" /><b>Allice Mingham</b
                >Los Angeles</a
              ><span class="status offline"></span>
            </li>
            <li class="member">
              <a href="#"
                ><img src="img/profileimg6.png" alt="img" /><b>James Throwing</b
                >Las Vegas</a
              ><span class="status offline"></span>
            </li>
          </ul>

          <form class="search">
            <input
              type="text"
              class="form-control"
              placeholder="Search a Friend..."
            />
          </form>
        </div>
        <!-- End Chat -->
      </div>
    </div>
    <!-- END SIDEPANEL -->
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
