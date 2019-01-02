<?php
	include_once 'conn.php';

	$sqlSiswa = "SELECT * FROM siswa";
	$resSiswa = $conn->query($sqlSiswa);

	$sqlKelas = "SELECT * FROM kelas";
	$resKelas = $conn->query($sqlKelas);
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
		<h1>Tambah Mapping Kelas</h1>
		<form action="create_map_kelas.php" method="POST">
			<p>
				Nama   &nbsp;: 
				<select name="id_siswa">
					<?php 
						foreach ($resSiswa as $key => $value) { ?>
							<option value="<?=$value['id']?>"><?=$value['nama']?></option>
						<?php } ?>	
				</select>
				<br><br>
				Kelas :
				<select name="id_kelas">
					<?php 
						foreach ($resKelas as $key => $value) { ?>
							<option value="<?=$value['id']?>"><?=$value['nama']?></option>
						<?php } ?>	
				</select> 
				<br>
				<br>
				<input type="submit" value="Submit" style="margin-left: 55px;">
			</p>
		</form>
	</body>
</html>