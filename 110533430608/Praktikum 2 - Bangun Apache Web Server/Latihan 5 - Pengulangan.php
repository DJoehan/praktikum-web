<!DOCTYPE html>
<html>
<head>
	<title>Perulangan</title>
</head>
<body>

<p><b>Pengulangan while</b></p>
<?php
$i = 0;

while ($i < 10){
	echo $i;

	// inkremen counter
	$i++;
}
?>

<p><b>Pengulangan do-while</b></p>
<?php
$i = 0;

do{
	echo $i;
	// inkremen counter
	$i++;
	} while ($i <= 10);

?>

<p><b>Pengulangan for</b></p>
<?php

for ($i=0 ; $i < 10 ; $i++ ) { 
	echo $i;
}
?>

<p><b>Pengulangan foreach</b></p>
<?php

$arr = array(1, 2, 3, 4);

foreach ($arr as $value) {
	echo $value;
}
?>

</body>
</html>