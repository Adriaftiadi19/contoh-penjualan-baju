<?php
	$base_url = "http://localhost/ProgramRetooling/penjualan-baju/";
	date_default_timezone_set('Asia/Jakarta');
	$server = "localhost";
	$user   = "root";
	$pass	= "";
	$db		= "penjualan";

	$koneksi = mysqli_connect($server,$user,$pass,$db)
		or die (mysql_connect_error());
?>