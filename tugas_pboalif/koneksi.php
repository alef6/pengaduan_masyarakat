<?php
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");
if(!$koneksi){
    echo "gagal KOneksi";
}
// $query = $koneksi->query("select * from pengaduan");
// $data = $query->fetchAll();