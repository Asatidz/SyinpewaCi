<?php
    if(!defined('INDEX')) die("");
    switch ($_SESSION['role']) {
        case '55':
            $role = "Administrator";
            break;
        case '66':
            $role = "Operator";
            break;
        case '77':
            $role = "Owner";
            break;
        default:
            $role = "User";
            break;
    }
?>
    
      <h2>
        Dashboard
      </h2>
<h1>Selamat Datang di Web System Informasi Poin Pelanggaran</h1>
    <h3>Hai <?=$_SESSION['nama']?>☺️☺️</h3>
    <h3>Anda login sebagai <?= $role ?></h3>
    <section class="content-header">

    </section>

        <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Top Pelanggaran</span>
              <span class="info-box-number">3</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>


        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Top Siswa</span>
              <span class="info-box-number">5</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- /.row -->

      <!-- Main row -->

      <!-- /.row -->
    </section>