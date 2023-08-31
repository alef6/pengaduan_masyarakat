<?php
$isi_laporan = $_POST['isi_laporan'];
$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root", "");

$query = $koneksi->query("UPDATE `pengaduan` set isi_laporan='$isi_laporan' where id_pengaduan='$id'");

if($koneksi){
    header("location:homepag.php");
}else {
    print_r($koneksi->errorInfo());
}
?>