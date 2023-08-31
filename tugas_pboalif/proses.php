<?php
session_start();
if (isset($_SESSION['nik'])) {
 header("location:homepag.php");
}
$isi = $_POST['isi_laporan'];

$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];
$nik = $_SESSION['nik'];
 $status = $_POST['status'];


move_uploaded_file($asal_foto, "foto/$nama_foto");

include 'koneksi.php';
$tgl_pengaduan = date('Y-m-d');

$proses = $koneksi->query("INSERT INTO pengaduan values ('', '$tgl_pengaduan', '$nik', '$isi', '$nama_foto')");

if($proses){
    header("Location:homepag.php");
}else {
    print_r($koneksi->errorInfo());
}
?>


