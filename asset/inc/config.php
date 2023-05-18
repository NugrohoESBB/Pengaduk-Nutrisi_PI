<?php
	$dbname = "db_nutrisipi";
	$servername = "localhost";
	$username = "root";
	$password = "";

	$koneksi = mysqli_connect($servername,$username,$password,$dbname);
	if (mysqli_connect_errno()){
		echo "Koneksi Gagal".mysqli_connect_error();
	}
?>
