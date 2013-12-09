<!DOCTYPE html>
<html>
<head>
	<title>Hello Greeting</title>
</head>
<body>

<h3> Selamat Datang di Greeting</h3>

<?php

	function greeting()
	{
	$date = date ("G : i A");
	if ($date>=0 and $date<10) {
		echo "Selamat Pagi";
	} else if ($date>=10 and $date<15) {
		echo "Selamat Siang";
	} else if ($date>=15 and $date<19) {
		echo "Selamat Sore";
	} else if ($date>=19 and $date<00) {
		echo "Selamat Malam";
	}else echo "Waktu Salah";
	}

?>

<h4> Waktu menunjukkan pukul</h4>

<?php 
	greeting(); 
?><br>

<?php
	//penulisan waktu
	$date = date ("G : i A");
	echo "$date WIB";
?>

</body>
</html>