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
    <title>KopiKare</title>
</head>
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" class="text-white ">KOPIKARE</a>
</nav>
<br>
<br>
<div class="col-md-10 p-5 pt-2">
    <h3><i class=""></i>SILAHKAN ISI FORM DIBAWAH INI</h3>
    <hr>

    <body>
        <form action="inputpembelian.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" type="text" id="nama" value="">
            </div>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input class="form-control" name="alamat" type="text" id="alamat" value="">
            </div>
            <div class="form-group">
                <label>Nomor Hp</label>
                <input class="form-control" name="nomor" type="text" id="nomor" value="">
            </div>
            <div class="form-group">
                <label for="produk">Pilih Produk</label>
                <select class="form-control" name="produk" id="produk">
                    <option>Kopi Robusta Rp.15.000</option>
                    <option>Kopi Robusta Lanang Rp.25.000</option>
                    <option>Kopi Arabica Rp.30.000</option>
                </select>
            </div>
            <div class="form-group">
                <label>jumlah produk</label>
                <input class="form-control" name="jumlah" type="text" id="jumlah" value="">
            </div>
            <br>
            <br>
            <td>Bukti Transfer</td>
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