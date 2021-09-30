<!doctype html>
<html lang="en">
<?php

include 'koneksi.php';
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <title>Admin Work Space</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="#">WELCOME ADMIN ORIGINALE</a>
  <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="../admin/index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="share/share.php"><i class="fas fa-share-alt-square mr-2"></i> Upload Konten</a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="daftar/daftar.php"><i class="fas fa-users mr-2"></i> Admin </a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="daftarpembeli.php"><i class="fas fa-shopping-cart"></i> Daftar Pembeli </a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        <hr class="">
      </li>
    </ul>
  </div>
  <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-shopping-cart"></i>Daftar Pembeli</h3>
    <hr>

    <div class="row">
      <br>
      <?php
      $no = 0;
      $result = mysqLi_query($koneksi, "SELECT * FROM beli ORDER BY nama ASC");
      while ($row = mysqli_fetch_array($result)) {
        $no++
      ?>
        <br>
        <div class="card" style="width: 1000px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <br>
              <img src="..img<?php echo $row['foto']; ?>" border="0" width="300px" height="450px" />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Nama     :<?php echo $row['nama']; ?></h5>
                <h5 class="card-text">Alamat   :<?php echo $row['alamat']; ?></h5>
                <h5 class="card-text">Nomor    :<?php echo $row['nomor']; ?></h5>
                <h5 class="card-text">Produk   :<?php echo $row['produk']; ?></h5>
                <h5 class="card-text">Jumlah   :<?php echo $row['jumlah']; ?></h5>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
</div>

<body>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>