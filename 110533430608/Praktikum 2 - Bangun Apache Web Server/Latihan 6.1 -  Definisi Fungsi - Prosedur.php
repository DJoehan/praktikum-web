<!DOCTYPE html>
<html>
<head>
	<title>Definisi Fungsi/Prosedur </title>
</head>
<body>

<?php
// Contoh prosedur
function do_print(){
	//mencetek informasi timestamp
	echo time();
}

// Memanggil prosedur
do_print();

echo '<br /';

// Contoh fungsi penjumlahan
function jumlah($a, $b){
	return ($a + $b);
}

echo jumlah(2, 3);
// Output : 5

?>

</body>
</html>