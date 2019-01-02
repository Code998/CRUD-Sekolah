<?php
	include_once 'conn.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM kelas WHERE id = " . $id;
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();

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
			<li><a href="create.php">Tambah data Siswa</a></li>
			<li><a href="kelas.php">Lihat Data Kelas</a></li>
			<li><a href="mata_pelajaran.php">Lihat Data Mata Pelajaran</a></li>
			<li><a href="index.php">Lihat data Siswa</a></li>
		</ul>
		<h1>Edit Kelas</h1>
		<form action="kelas_edit.php" method="POST">
			<input type="hidden" value="<?=$data['id']?>" name="id">
			<p>Nama kelas: <input type="text" value="<?=$data['nama']?>" name="nama"> <input type="submit" value="Submit"></p>
		</form>
	</body>
</html>