<?php
	include_once 'conn.php';

	$param = $_POST;

	$sql = "INSERT INTO mapping_kelas(id_siswa, id_kelas) VALUES ('" . $param['id_siswa'] . "', '" . $param['id_kelas'] . "') ";
	if ($conn->query($sql) === TRUE) {
		header("Location: mapping_kelas.php");
	}
	else{
		echo "Gagal!";
	}
?>