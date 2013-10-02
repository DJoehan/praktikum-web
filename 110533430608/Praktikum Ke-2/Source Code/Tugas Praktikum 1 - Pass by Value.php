<!DOCTYPE html>
<html>
<head>
	<title>Pass By Value</title>
</head>
<body>
<p>jadi membuat salinan dari argumen yang asli sehingga argumen asli
tersebut tidak ikut berubah dengan adanya proses pada fungsi terhadap 
argumen tersebut.</p>

<?php

	function jumlah($nilai) {
	$nilai++;
	}
	$input=5;
	jumlah($input);
	echo $input;

?> 
</body>
</html>