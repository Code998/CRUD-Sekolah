<?php
	include_once 'conn.php';

	$param = $_POST;

	$sql = "INSERT INTO siswa(nama) VALUES ('" . $param['nama'] . "') ";
	if ($conn->query($sql) === TRUE) {
		header("Location: index.php");
	}
	else{
		echo "Gagal!";
	}
?>