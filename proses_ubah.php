<?php
// koneksi database
require_once('koneksi.php');

// menangkap data yang di kirim dari form
$id = $_POST['id'];
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


// update data ke database
$query = "UPDATE tb_skck SET nama='$nama', jk='$jk', kebangsaan='$kebangsaan' ,
 agama='$agama', tempat='$tempat', tanggal_lahir='$tanggal_lahir', alamat='$alamat',
 pekerjaan='$pekerjaan', nik='$nik', keperluan='$keperluan' WHERE id='$id'";
mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke halaman utama
header("location:halaman_utama.php?pesan=ubah");
