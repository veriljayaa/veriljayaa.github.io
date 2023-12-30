<!DOCTYPE html>
<html>
<head>
	<title>Praktikum String dan Tanggal</title>
</head>
<body>
	<?php 
		$kalimat = "Universitas PGRI Madiun";

		printf("Hasil Strlen : %s<br>\n", strlen($kalimat));
		printf("Hasil Strtoupper : %s<br>\n", strtoupper($kalimat));
		printf("Hasil strtolower : %s<br>\n", strtolower($kalimat)); // Perbaikan: huruf kecil semua
		printf("Hasil ucfirst : %s<br>\n", ucfirst($kalimat));
		printf("Hasil ucwords : %s<br>\n", ucwords($kalimat));
		print("Aslinya : $kalimat<br>\n");

		printf("Tanggal Sekarang : %s", date("d F Y")); echo "<br>";
?>

</body>
</html>