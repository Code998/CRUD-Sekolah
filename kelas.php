<?php
	include_once 'conn.php';

	$sql = "SELECT * FROM kelas";
	$result = $conn->query($sql);

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
		<table cellpadding="10">
			<h1>Tabel Kelas</h1>
			<tr>
				<td align="center" style="width: 80%;">Kelas</td>
				<td colspan="2" align="center">Aksi</td>
			</tr>
			<?php 
				while ($row = $result->fetch_assoc()) {
			?>
					<tr>
						<td>
							<?= $row['nama'] ?>
						</td>
						<td><a href="edit_kelas.php?id=<?=$row['id']?>">Edit</a></td>
						<td><a href="hapus_kelas.php?id=<?=$row['id']?>">Hapus</a></td>
					</tr>
				<?php } ?>
		</table>
		<br>
		<a href="add_kelas.php">
			<button style="margin-left: 100px;">
				Tambah Data
			</button>
		</a>
	</body>
</html>