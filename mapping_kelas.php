<?php
	include_once 'conn.php';

	$sql = "SELECT m.id, s.nama, k.nama kelas FROM mapping_kelas m, siswa s, kelas k WHERE m.id_siswa = s.id AND m.id_kelas = k.id ORDER BY s.nama";
	$result = $conn->query($sql);
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
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
			<h1>Tabel Mapping Kelas</h1>
			<tr>
				<td align="center" style="width: 40%;">Nama</td>
				<td align="center" style="width: 40%;">Kelas</td>
				<td colspan="2" align="center">Aksi</td>
			</tr>
			<?php 
				while ($row = $result->fetch_assoc()) {
			?>
					<tr>
						<td>
							<?= $row['nama'] ?>
						</td>
						<td>
							<?= $row['kelas'] ?>
						</td>
						<td><a href="edit_mapping.php?id=<?=$row['id']?>">Edit</a></td>
						<td><a href="hapus_mapping.php?id=<?=$row['id']?>">Hapus</a></td>
					</tr>
				<?php } ?>
		</table>
		<br>
		<a href="add_map_kelas.php">
			<button style="margin-left: 100px;">
				Tambah Data
			</button>
		</a>
	</body>
</html>