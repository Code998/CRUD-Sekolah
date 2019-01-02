<?php
	include_once 'conn.php';

	$a = $_GET['id'];

	$sql = "DELETE FROM mata_pelajaran WHERE id = " . $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: index.php");
	}
	else{
		echo "Gagal!";
	}
?>