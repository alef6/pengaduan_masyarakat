<DOCTYPE html>
<html lang="en">
<html>
    <head>
        <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
        
    </head>
    
    <body> 
      
<nav  class="navbar navbar-expand-lg navbar-light bg-primary" >

  <div class="container">
    <a class="navbar-brand" href="#">pengaduan masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="editlaporan.php">edit laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">laporan</a>
        </li>
        
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">log out</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      
      <form class="d-flex">
        <a href="login.php"><button class="btn btn-outline-danger" type="button">Logout</button></a>
      </form>
    </div>
  </div>
</nav>
</nav>

</body>
<body background-image:green>
    <H4>PENGADUAN MASYARAKAT</H4>
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">nama</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
      <th scope="col">tanggal pengaduan</th>
      <th scope="col">status</th>
      <th scope="col" style="text-align: center;">Aksi</th>
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
      <td><img src="foto/<?=$data['foto'] ?>" width="134px"></td>
      <td><?=$data['tgl_pengaduan'] ?></td>
      <td><?=$data['status'] ?></td>
      <td><center>
      <a href="edit.php?id=<?php echo $data ["id_pengaduan"]?>"><input type="button" value="edit" class="btn btn-outline-success"></a>
      <a href="proses_hapus.php?id=<?php echo $data ["id_pengaduan"]?>"><input type="button" value="hapus" class="btn btn-outline-danger"></a>
      <a href="lihat.php"><input type="button" value="lihat" class="btn btn-outline-primary"></a>
      </center></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>
<a href="laporan.php"><input type="submit" value="tambah" name="submit" class="btn btn-outline-danger"></a>
</div>
</body>
</html>