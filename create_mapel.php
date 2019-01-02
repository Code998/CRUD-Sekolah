<?php
	include_once 'conn.php';

	$param = $_POST;

	$sql = "INSERT INTO mata_pelajaran(nama_mapel) VALUES ('" . $param['nama'] . "') ";
	if ($conn->query($sql) === TRUE) {
		header("Location: mata_pelajaran.php");
	}
	else{
		echo "Gagal!";
	}
?>