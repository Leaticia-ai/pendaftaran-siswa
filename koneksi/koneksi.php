<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "logic_gc";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysqli_connect_error());
	}
?>
