<?php
	include_once 'conn.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Data</title>
		<link rel="stylesheet" href="css/infinite.css">
	</head>
	<body>
		<ul>
			<li><a href="mapping_kelas.php">Lihat Data Mapping</a></li>
			<li><a href="kelas.php">Lihat Data Kelas</a></li>
			<li><a href="mata_pelajaran.php">Lihat Data Mata Pelajaran</a></li>
			<li><a href="index.php">Lihat data Siswa</a></li>
		</ul>
		<h1>tambah Kelas</h1>
		<form action="create_kelas.php" method="POST">
			<p>Kelas : <input type="text" name="nama"> <input type="submit" value="Submit"></p>
		</form>
	</body>
</html>