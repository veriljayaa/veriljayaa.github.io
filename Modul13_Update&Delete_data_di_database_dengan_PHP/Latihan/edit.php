<!DOCTYPE html>
<html>
<head>
	<title>Update Data di Database dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat Koneksi Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>www.unipma.ac.id</h3>
	</div>
	<br>
	<a href="index.php">Lihat Semua Data</a>
	<br>
	<h3>Edit data</h3>

	<?php 
		include "koneksi.php";
		$npm = $_GET['npm'];
        $nomor = 1;
        $data = mysqli_query($conn,"select * from mahasiswa WHERE npm='$npm'");
        while($d = mysqli_fetch_array($data)){
	 ?>
	 <form action="update.php" method="post">
	 	<table>
	 		<tr>
	 			<td>NPM</td>
	 			<td><input type="text" name="npm" value="<?php echo $d['npm'] ?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Nama</td>
	 			<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Alamat</td>
	 			<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Kelas/td>
	 			<td><input type="text" name="kelas" value="<?php echo $d['kelas'] ?>"></td>
	 		</tr>
	 		<tr>
	 			<td></td>
	 			<td><input type="submit"  value="Simpan"></td>
	 		</tr>
	 	</table>
	 </form>
	<?php } ?>
</body>
</html>