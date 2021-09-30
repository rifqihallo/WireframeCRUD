<?php 
 	$koneksi = mysqli_connect('localhost', 'root', '','data_kopi');
 	if (!$koneksi) {
 		die("Koneksi dengan database gagal =  " . mysqli_connect_errno() . mysqli_connect_error());
 		
 		# code...
 	}
 ?>