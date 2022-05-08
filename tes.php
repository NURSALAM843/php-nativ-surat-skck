<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>LOGIN</title>

    <!-- Favicons -->
    <link href="form/img/favicon.png" rel="icon">
    <link href="form/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="form/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="form/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="form/css/style.css" rel="stylesheet">
    <link href="form/css/style-responsive.css" rel="stylesheet">

</head>

<body>
    <div id="login-page">
        <div class="container">
            <form class="form-login" action="proses_login.php" method="POST">
                <h2 class="form-login-heading">SISTEM INFORAMSI PEMBUATAN SKCK</h2>
                <h3 class="text-center">Masuk Sistem</h3>
                <div class="login-wrap">
                    <label for="username">username</label>
                    <input type="text" class="form-control" name="username" required id="username" placeholder="NAMA PENGGUNA" data-msg="Masukkan Nama Pengguna">
                    <br>
                    <input type="text" class="form-control" name="username" required id="username" placeholder="NAMA PENGGUNA" data-msg="Masukkan Nama Pengguna">
                    <br>
                    <input type="password" class="form-control" required placeholder="KATA SANDI" name="password" id="password" data-msg="Masukkan Kata Sandi">
                    <br>
                    <button class="btn btn-theme btn-block" href="" name="simpan" type="submit"><i class="fa fa-lock"></i> MASUK</button>
            </form>
            <hr>
            <form>
        </div>
        </form>
    </div>
    </div>
    <script src="form/lib/jquery/jquery.min.js"></script>
    <script src="form/lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="form/lib/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/polri.jpg", {
            speed: 500
        });
    </script>
</body>

</html>