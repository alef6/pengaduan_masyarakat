<?php
session_start();
if(isset($_SESSION['nik'])){
    header('location:login.php');
}
$koneksi = new PDO ("mysqli :host=localhost;dbname=ppm ","root","");
$nik = $_SESSION['nik'];

echo $nik;
$query = $koneksi->query("'select'form pengaduan_masyarakat where nik='$nik'");
$data = $query->fetchall();