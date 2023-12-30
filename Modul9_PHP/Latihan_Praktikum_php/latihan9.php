<!DOCTYPE html>
<html>
<head>
	<title>Latihan 9 pemrograman web</title>
</head>
<body>
	<?php 
		# cara pertama mendeklarasikan array multidimensi
		print("CARA PERTAMA MENDEKLARASIKAN ARRAY MULTIDIMENSI: <br/>");
		$buah = array("apel"=> array("warna"=>"merah", "rasa"=>"manis"), "pisang"=> array("warna"=>"kuning", "rasa"=>"manis"));

		print "Warna buah apel adalah";
		print $buah["apel"]["warna"]."<br/>";
		print "Warna buah pisang adalah";
		print $buah["pisang"]["warna"];
		
		echo "<br/><br/><br/>";

		# cara kedua mendeklarasikan array multidimensi
		print("CARA KEDUA MENDEKLARASIKAN ARRAY MULTIDIMENSI: <br/>");
		$buah = array (
			array ("apel","merah","manis"), array ("pisang","kuning","manis"));
		
		echo $buah [0][0]." warna: ".$buah[0][1]." rasa: ".$buah[0][2]."<br/>";
		echo $buah [1][0]." warna: ".$buah[1][1]." rasa: ".$buah[1][2]."<br/>";
	 ?>
</body>
</html>