<?php
	include_once 'conn.php';

	$id = $_GET['id'];
	$sql = "SELECT m.id, s.nama, k.nama kelas FROM mapping_kelas m, siswa s, kelas k WHERE m.id_siswa = s.id AND m.id_kelas = k.id AND m.id = ". $id ." ORDER BY s.nama";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();

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
		<h1>Edit Mapping Kelas</h1>
		<form action="mapping_edit.php" method="POST">
			<input type="hidden" value="<?=$data['id']?>" name="id">
			<p>
				Nama   &nbsp;:<input type="text" name="nama" value="<?=$data['nama']?>" disabled>
				<br><br>
				Nama   &nbsp;: 
				<select name="id_siswa">
					<?php 
						foreach ($resSiswa as $key => $value) { ?>
							<option value="<?=$value['id']?>"><?=$value['nama']?></option>
						<?php } ?>	
				</select>
				<br><br>
				Kelas :<input type="text" name="kelas" value="<?=$data['kelas']?>" disabled>
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