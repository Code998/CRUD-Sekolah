<?php
	include_once 'conn.php';

	$a = $_GET['id'];

	$sql = "DELETE FROM siswa WHERE id = " . $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: index.php");
	}
	else{
		echo "Gagal!";
	}
?>