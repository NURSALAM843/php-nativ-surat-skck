<?php
session_start();
require_once('koneksi.php');
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
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i> DATA PEMOHON</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> TABEL PEMOHON</h4>
                            <br>
                            <?php if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "hapus") {
                                    echo "<div class='alert alert-warning text-center'>Data Berhasil Di Hapus</div>";
                                } else if ($_GET['pesan'] == "ubah") {
                                    echo "<div class='alert alert-info text-center'>Data Berhasil Di Ubah </div>";
                                }
                            } ?>
                            <section id="unseen">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th width="100px">NO</th>
                                            <th width="200px">NAMA</th>
                                            <th width="200px">NIK</th>
                                            <th width="200px">KEPERLUAN</th>
                                            <th width="200px">AKSI</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $select = mysqli_query($koneksi, "SELECT *FROM tb_skck");
                                        while ($data = mysqli_fetch_array($select)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['nik']; ?></td>
                                                <td><?php echo $data['keperluan']; ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-warning">Ubah</a>
                                                    <a href="hapus_data.php?id=<?= $data["id"]; ?>" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data saham : <?php echo $data['nama']; ?> ?')" data-target="#hapusA<?php echo $data['id'] ?>">Hapus</a>
                                                    <a href="cetak.php?id=<?php echo $data['id'] ?>" class="btn btn-success">Cetak</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </section>
                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-lg-4 -->
                </div>
            </section>
            <!-- /wrapper -->
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
    <script type="application/javascript">
        $(document).ready(function() {
            $("#date-popover").popover({
                html: true,
                trigger: "manual"
            });
            $("#date-popover").hide();
            $("#date-popover").click(function(e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function() {
                    return myDateFunction(this.id, false);
                },
                action_nav: function() {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [{
                        type: "text",
                        label: "Special event",
                        badge: "00"
                    },
                    {
                        type: "block",
                        label: "Regular event",
                    }
                ]
            });
        });

        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
</body>

</html>