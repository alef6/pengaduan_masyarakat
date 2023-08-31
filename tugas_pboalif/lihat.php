<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepag.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">laporan</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="logout.php"><button class="btn btn-outline-danger" type="button">Logout</button></a>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <h1 style="margin-top: 30px; text-align: center;">Pengaduan Masyarakat</h1>
<table class="table"  >
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">tanggal pengaduan</th>
      <th scope="col" style="text-align: center;">Aksi</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php $koneksi = mysqli_connect("localhost","root","","pengaduan_masyarakat");
    $join = "SELECT * FROM pengaduan join masyarakat on masyarakat.nik = pengaduan.nik";
    $select = mysqli_query($koneksi ,$join);
    ?>
    <?php while($data = mysqli_fetch_array($select)){ ?>
    <tr>
      <td><?=$data['nama'] ?></td>
      <td><?=$data['isi_laporan'] ?></td>
      <td><img src="foto/<?=$data['foto'] ?>" width="250px"></td>
      <td><?=$data['tgl_pengaduan'] ?></td>  
      <td><center>
      <a href="edit.php?id=<?php echo $data ["id_pengaduan"]?>"><input type="button" value="edit" class="btn btn-outline-success"></a>
      <a href="proses_hapus.php?id=<?php echo $data ["id_pengaduan"]?>"><input type="button" value="hapus" class="btn btn-outline-danger"></a>
      </center></td>
      <td><?=$data['status']?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<a href="laporan.php"><input type="button" value="tambah" class="btn btn-outline-danger"></a>
</div>
</body>
</html>