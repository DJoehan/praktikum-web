<!DOCTYPE html>
<html>
<head>
	<title>Generate Matrik</title>
</head>
<body>

<center>
<h3>Generate Tabel dengan Inputan Argumen</h3>
<br>

<?php
	function buat_tabel($baris, $kolom)
	{
	echo "<table border='1'>";

	for($b = 0; $b < $baris; $b++) {
	echo "<tr height=\"30px\">";

	for($k = 0; $k < $kolom; $k++) {
	echo "<td width=\"100px\"> ".$tr." </td>";
	}
	echo "</tr>\n";
	}
	echo "</table>\n";
	echo "<h3>Tabel : $baris baris dan $kolom kolom</h3>";
	}
	buat_tabel(3,5);
?>

</center>

</body>
</html>