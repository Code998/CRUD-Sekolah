<?php
	include_once 'conn.php';

	$a = $_GET['id'];

	$sql = "DELETE FROM mapping_kelas WHERE id = " . $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: mapping_kelas.php");
	}
	else{
		echo "Gagal!";
	}
?>