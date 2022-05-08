<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Formulir Pembuatan SKCK POLRES Samarinda</title>

    <!-- Favicons -->
    <link href="form/img/favicon.png" rel="icon">
    <link href="form/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="form/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="form/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="form/lib/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="form/lib/bootstrap-daterangepicker/daterangepicker.css" />
    <!-- Custom styles for this template -->
    <link href="form/css/style.css" rel="stylesheet">
    <link href="form/css/style-responsive.css" rel="stylesheet">

</head>

<body background="img/SKCK.jpg">
    <section id="container">
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <h3>
                    <center><i class="fa fa-angle"></i> FORMULIR PEMBUATAN SKCK</center>
                </h3>
                <!-- BASIC FORM ELELEMNTS -->
                <div class="row row modal-title">
                    <div class="col-lg-12">
                        <form class="form-horizontal style-form" method="POST" action="proses_simpan.php">
                            <div class="form-group">
                                <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Nama</label></font>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <font color="black"><label class="col-sm-1 col-sm-1 control-label">Jenis Kelamin</label></font>
                                <div class="col-sm-3">
                                    <select name="jk id=" cars" class="form-control">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Kebangsaan</label></font>
                                <div class="col-sm-3">
                                    <input type="3" class="form-control" name="kebangsaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <font color="black"><label class="col-sm-1 col-sm-1 control-label">Agama</label></font>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="agama">
                                </div>
                            </div>
                            <div class="form-group">
                                <font color="black"> <label class="col-sm-1 col-sm-1 control-label">TTL</label>
                                    <font color="black">
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" name="tempat">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="date" class="form-control" name="tanggal_lahir">
                                        </div>
                            </div>
                            <div class="form-group">
                                <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Alamat</label></font>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Pekerjaan</label></font>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="pekerjaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <font color="black"> <label class="col-sm-1 col-sm-1 control-label">NIK</label></font>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="nik">
                                </div>
                            </div>
                            <div class="form-group">
                                <font color="black"> <label class="col-sm-1 col-sm-1 control-label">Keperluan</label></font>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="keperluan">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-10">
                                    <button class="btn btn-facebook" type="submit">Simpan</button>
                                    <input type="button" value="Batal" onclick="window.history.back()" class="btn btn-large btn-danger"> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- col-lg-12-->
                </div>
                <!-- /row -->
            </section>
        </section>
    </section>
</body>
<!-- js placed at the end of the document so the pages load faster -->
<script src="form/lib/jquery/jquery.min.js"></script>
<script src="form/lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="form/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="form/lib/jquery.scrollTo.min.js"></script>
<script src="form/lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="form/lib/common-scripts.js"></script>
<!--script for this page-->
<script src="form/lib/jquery-ui-1.9.2.custom.min.js"></script>
<!--custom switch-->
<script src="form/lib/bootstrap-switch.js"></script>
<!--custom tagsinput-->
<script src="form/lib/jquery.tagsinput.js"></script>
<!--custom checkbox & radio-->
<script type="text/javascript" src="form/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="form/lib/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="form/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="form/lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="form/lib/form-component.js"></script>
<script>
    $.backstretch("img/polri.jpg", {
        speed: 500
    });
</script>

</body>

</html>