<!DOCTYPE html>
<html>
<head>
	<title>Demo Variabel</title>
</head>
<body>

<p><b>Demo variabel 1</b></p>
<?php
// Deklarasi dan insialisasi
$bil = 3;

echo $bil;
?>

<p><b>Demo variabel 2</b></p>
<?php
// Deklarasi dan insialisasi
$bil = 3;

// Dumping informasi mengenai variabel
var_dump($bil);
print_r($bil);
?>

<p><b>Demo variabel 3</b></p>
<?php
$bil = 3;
var_dump($bil);
// Output: int(3)

$var = "";
var_dump($var);
// Output: string(0)

$var = null;
var_dump($var);
// Output: NULL
?>

</body>
</html>