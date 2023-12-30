<!DOCTYPE html>
<html>
<head>
	<title>Latihan 7 pemrograman web</title>
</head>
<body>
	<form method="get">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr align="center">
				<td colspan="3"><input type="submit" name="submit" value="simpan"/>&nbsp;<input type="Reset" name="Reset" value="Reset"></td>
			</tr>
		</table>
	</form>
	<?php 
		if (isset($_GET['submit'])) { // pengecekan jika diproses tombol submit. maka bernilai true
			$nama = $_GET['nama']; // variabel untuk mengambil nilai dari URL nama
			$nim = $_GET['nim']; // variabel untuk mengambil nilai dari URL nim

			echo "<br/><br/> INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS <br/>";
			echo "Nama :".$nama;
			echo "<br/>Nim : ". $nim;
		}
	 ?>
</body>
</html>