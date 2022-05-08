<?php
include 'koneksi.php';
// membaca data dari form
$nama = strtoupper($_POST['nama']);
$jk = $_POST['jk'];
$kebangsaan = $_POST['kebangsaan'];
$agama = $_POST['agama'];
$tempat = $_POST['tempat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$nik = $_POST['nik'];
$keperluan = strtoupper($_POST['keperluan']);
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("skck.rtf");
// isi dokumen dinyatakan dalam bentuk string
$document = str_replace("#nama", $nama, $document);
$document = str_replace("#jk", $jk, $document);
$document = str_replace("#kebangsaan", $kebangsaan, $document);
$document = str_replace("#agama", $agama, $document);
$document = str_replace("#tempat", $tempat, $document);
$document = str_replace("#tanggal_lahir", $tanggal_lahir, $document);
$document = str_replace("#alamat", $alamat, $document);
$document = str_replace("#pekerjaan", $pekerjaan, $document);
$document = str_replace("#nik", $nik, $document);
$document = str_replace("#keperluan", $keperluan, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Pemohon-SKCK.doc");
header("Content-length: " . strlen($document));
echo $document;
