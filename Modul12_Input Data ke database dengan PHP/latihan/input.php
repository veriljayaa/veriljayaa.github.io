<!DOCTYPE html>
<html>
<head>
	<title>Input Data ke Database dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Input Data Ke Database dengan PHP</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.unipma.ac.id</h3>
	</div>
	<br>
	<a href="index.php">Lihat Semua Data</a>
	<br>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">
		<table>
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>