<?php
	include_once 'conn.php';

	$a = $_POST['id'];
	$b = $_POST['nama'];

	$sql = "UPDATE mata_pelajaran SET nama_mapel = '". $b . "' WHERE id = ". $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: mata_pelajaran.php");
	}
	else{
		echo "Gagal!";
	}
?>