<?php
require_once('koneksi.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "DELETE FROM tb_skck WHERE id = '$id'");
    header('location:halaman_utama.php?pesan=hapus');
}
