<!doctype html>
<html lang="en">

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
        <a class="nav-link active text-white" href="../index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="../share/share.php"><i class="fas fa-share-alt-square mr-2"></i> Upload Konten</a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="../daftar/daftar.php"><i class="fas fa-users mr-2"></i> Admin </a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="../daftarpembeli.php"><i class="fas fa-shopping-cart"></i> Daftar Pembeli </a>
        <hr class="">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        <hr class="">
      </li>
    </ul>
  </div>
<br>
<br>
    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-share-alt-square mr-2"></i>Tambah Produk</h3>
        <hr>

        <body>
            <form action="prosesinput.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <div class="form-group">
                    <label>Admin</label>
                    <input class="form-control" name="admin" type="text" id="admin" value="">
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" type="text" id="nama" value="">
                </div>
                <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" type="text" id="deskripsi" value="<?php echo $deskripsi ?>"></textarea>
                            </div>
                            <tr>
                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td>
                        <input type="file" name="foto" id="foto" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
                </tr>
                </table>

            </form>
        </body>

</html>