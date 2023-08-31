<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$query = $koneksi->query("SELECT * FROM masyarakat WHERE username = '$username' AND password ='$password'");

$jumlahBaris = $query->rowCount();

if ($jumlahBaris > 0) {

    $data = $query->fetch();
    
    $_SESSION['nik'] = $data['nik'];
    $_SESSION['level'] = 'masyarakat';

    header("location:homepag.php");
}else{
    header("location:login.php");
}

?>