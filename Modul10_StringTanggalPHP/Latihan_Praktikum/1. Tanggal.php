<!DOCTYPE html>
<html>
<head>
	<title>Praktikum Tanggal</title>
</head>
<body>
	<?php 
  		$namahari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
  		$namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

  		echo $namahari[date("w")].", ".date("j"). " ".$namabulan[date("n")]." ".date("Y")."<br/>";
  		echo date("Y/m/d") . "<br/>"; // ini menampilkan dengan format 2017/10/02
  		echo date("l, d-m-Y") . "<br/>"; // ini menampilkan dengan format Tuesday, 02-10-2017
  		echo date("d F Y") . "<br/>"; // ini menampilkan dengan format 02 Oktober 2017
  		echo date("h:i:s") . "<br/>"; // ini menampilkan dengan format 00:31:04
  		echo date("l, d-m-Y h:i:s") . "<br/>"; // menampilkan dengan format Tuesday, 02-10-2017 00:31:35
	?>
</body>
</html>