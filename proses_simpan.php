<?php
// Load file koneksi.php
require_once("koneksi.php");
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$kebangsaan = $_POST['kebangsaan'];
$agama = $_POST['agama'];
$tempat = $_POST['tempat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$nik = $_POST['nik'];
$keperluan = $_POST['keperluan'];

$query = "INSERT INTO tb_skck VALUES('','" . $nama . "', '" . $jk . "', '" . $kebangsaan . "',
'" . $agama . "', '" . $tempat . "', '" . $tanggal_lahir . "', '" . $alamat . "',
 '" . $pekerjaan . "', '" . $nik . "', '" . $keperluan . "')";
$sql = mysqli_query($koneksi, $query);
header("location:berhasil.php");
