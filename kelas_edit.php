<?php
	include_once 'conn.php';

	$a = $_POST['id'];
	$b = $_POST['nama'];

	$sql = "UPDATE kelas SET nama = '". $b . "' WHERE id = ". $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: kelas.php");
	}
	else{
		echo "Gagal!";
	}
?>