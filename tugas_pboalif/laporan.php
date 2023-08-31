
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
<div class="container" class="table">
<h1 style="text-align: center;">Laporan</h1>
<form action="proses.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
  <label for="formFile" class="form-label">Bukti/Foto</label>
  <input name="foto" class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Laporan</label>
  <textarea name="isi_laporan" class= "form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <input type="submit" value="laporkan" class="btn btn-primary" style="margin-bottom: 10px;">
</form>
</div>
</body>
</html>