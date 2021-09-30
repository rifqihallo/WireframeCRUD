<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path ="img/".$foto;

    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO beli VALUES ('$nama','$alamat','$nomor','$produk','$jumlah','$foto')";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            die("Query Gagal dijalankan : " . mysqli_errno($koneksi)." - ". mysqli_error($koneksi));        
        }
        else
        {
            echo "<script>
            alert('Terimakasih Sudah Membeli Produk Kami');window.location.href='../index2.php'</script>";
        }
        
    }
}
