<?php
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");
$id = $_GET["id"];
$koneksi->query("delete from pengaduan where id_pengaduan=$id");

if($koneksi){
    header("location: homepag.php");
}else {
    print_r($koneksi->errorInfo());
}
?>