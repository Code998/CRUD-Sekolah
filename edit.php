<?php
	include_once 'conn.php';

	$a = $_POST['id'];
	$b = $_POST['nama'];

	$sql = "UPDATE siswa SET nama = '". $b . "' WHERE id = ". $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: index.php");
	}
	else{
		echo "Gagal!";
	}
?>