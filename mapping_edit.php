<?php
	include_once 'conn.php';

	$a = $_POST['id'];
	$b = $_POST['id_siswa'];
	$c = $_POST['id_kelas'];

	$sql = "UPDATE mapping_kelas SET id_siswa = '". $b . "', id_kelas = '". $c ."' WHERE id = ". $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: mapping_kelas.php");
	}
	else{
		echo "Gagal!";
	}

?>