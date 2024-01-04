<?php 
	include 'koneksi.php';
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kelas = $_POST['kelas'];

	$sql = "INSERT INTO mahasiswa (npm, nama, alamat, kelas) VALUES ('$npm', '$nama', '$alamat', '$kelas')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		header("location:index.php?pesan=input");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
 ?>