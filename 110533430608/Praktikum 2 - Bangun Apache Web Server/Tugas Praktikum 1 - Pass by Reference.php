<!DOCTYPE html>
<html>
<head>
	<title>Pass By Reference</title>
</head>
<body>
<p>Argumen fungsi yang dilewatkan secara pass by reference berarti membawa argumen asli
ke dalam fungsi sehingga argumen asli tersebut akan ikut berubah dengan adanya proses
pada fungsi terhadap argumen tersebut</p>

<?php

	function jumlah(&$nilai) {
	$nilai++;
	}
	$input=5;
	jumlah($input);
	echo $input;

?>

</body>
</html>