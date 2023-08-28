<?php
session_start();
include"koneksi.php";
$query=$koneksi->query("'select'from pengaduan_masyarakat where username='yudaskun'AND password='3434'");
$jumlahbaris=$query->rowcount();
if($jumlahbaris>0){
    $data =$query->fetch();
    $_SESSION['nik']=$data['nik'];

    $_SESSION['level']='pengaduan_masyarakat';
    header("location:login.php");
}
?>