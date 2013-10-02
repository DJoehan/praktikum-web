<!DOCTYPE html>
<html>
<head>
	<title>Tipe Data dan Casting</title>
</head>
<body>

<p><b>Cek Tipe</b></p>
<?php
$bil = 3;
var_dump(is_int($bil));
// Output: bool(true)

$var = "";
var_dump(is_string($var));
// Output: bool(true)
?>

<p><b>Casting Tipe</b></p>
<?php
$str = '123abc';

// Casting nilai variabel $str ke integer
$bil = (int) $str;
//$bil = 123

echo gettype($str);
// Output: string

echo gettype($bil);
// Output: integer
?>

</body>
</html>