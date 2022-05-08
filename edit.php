<?php
require_once('koneksi.php');
date_default_timezone_set("Asia/Singapore");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>ADMIN</title>

    <!-- Favicons -->
    <link href="form/img/favicon.png" rel="icon">
    <link href="form/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="form/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="form/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="form/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="form/lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="form/css/style.css" rel="stylesheet">
    <link href="form/css/style-responsive.css" rel="stylesheet">
    <script src="form/lib/chart-master/Chart.js"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="" class="logo"><b>SISTEM INFORMASI SKCK</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" data-toggle="modal" data-target="#myModal">Keluar</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href=""><img src="form/img/intelkam.jpg" class="img-circle" width="80"></a></php?>
                    <h5 class="centered">Admin</h5>
                    <li class="mt">
                        <a class="" href="halaman_utama.php">
                            <i class="fa fa-dashboard"></i>
                            <span>PEMOHON</span>
                        </a>
                    </li>
                    <li class="">
                        <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->


        -->
        <section id="container">
            <!--main content start-->
            <?php
            $id = $_GET['id'];
            $select = mysqli_query($koneksi, "SELECT * FROM tb_skck WHERE id=$id");
            while ($data = mysqli_fetch_array($select)) {
            ?>
                <section id="main-content">
                    <section class="wrapper">
                        <h3>
                            <center><i class="fa fa-angle"></i> EDIT DATA PEMOHON</center>
                        </h3>
                        <!-- BASIC FORM ELELEMNTS -->
                        <div class="row row modal-title">
                            <div class="col-lg-12">
                                <form class="form-horizontal style-form" method="POST" action="proses_ubah.php">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                        <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Nama</label></font>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <font color="black"><label class="col-sm-1 col-sm-1 control-label">Jenis Kelamin</label></font>
                                        <div class="col-sm-3">
                                            <select name="jk" class="form-control">
                                                <option value="<?php echo $data['jk']; ?>"><?php echo $data['jk']; ?></option>
                                                <option value="Laki-Laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Kebangsaan</label></font>
                                        <div class="col-sm-3">
                                            <input type="3" class="form-control" name="kebangsaan" value="<?php echo $data['kebangsaan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <font color="black"><label class="col-sm-1 col-sm-1 control-label">Agama</label></font>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="agama" value="<?php echo $data['agama']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <font color="black"> <label class="col-sm-1 col-sm-1 control-label">TTL</label>
                                            <font color="black">
                                                <div class="col-sm-1">
                                                    <input type="text" class="form-control" name="tempat" value="<?php echo $data['tempat']; ?>">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
                                                </div>
                                    </div>
                                    <div class="form-group">
                                        <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Alamat</label></font>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Pekerjaan</label></font>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="pekerjaan" value="pekerjaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <font color="black"> <label class="col-sm-1 col-sm-1 control-label">NIK</label></font>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" name="nik" value="<?php echo $data['nik']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Keperluan</label></font>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="keperluan" value="<?php echo $data['keperluan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-1 col-lg-10">
                                            <button class="btn btn-facebook" type="submit">Simpan</button>
                                            <input type="button" value="Batal" onclick="window.history.back()" class="btn btn-large btn-danger"> </button>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>
                            <!-- col-lg-12-->
                        </div>
                        <!-- /row -->
                    </section>
                </section>
        </section>
    </section>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" bila kamu benar ingin keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="form/lib/jquery/jquery.min.js"></script>
    <script src="form/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="form/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="form/lib/jquery.scrollTo.min.js"></script>
    <script src="form/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="form/lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="form/lib/common-scripts.js"></script>
    <script type="text/javascript" src="form/lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="form/lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="form/lib/sparkline-chart.js"></script>
    <script src="form/lib/zabuto_calendar.js"></script>
</body>

</html>