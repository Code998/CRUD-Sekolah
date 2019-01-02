<?php
	include_once 'conn.php';

	$param = $_POST;

	$sql = "INSERT INTO kelas(nama) VALUES ('" . $param['nama'] . "') ";
	if ($conn->query($sql) === TRUE) {
		header("Location: kelas.php");
	}
	else{
		echo "Gagal!";
	}
?>