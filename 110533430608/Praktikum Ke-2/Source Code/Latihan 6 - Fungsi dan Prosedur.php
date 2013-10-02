<!DOCTYPE html>
<html>
<head>
	<title>Definisi dan Argumen Fungsi Prosedur </title>
</head>
<body>

<p><b>Definisi Fungsi - Prosedur</b></p>
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

<p><b>Argumen Fungsi - Prosedur</b></p>
<?php
/**
 * Mencetak String
 * $teks nilai string
 * $bold adalah argumen opsional
 */
function print_teks($teks, $bold = true){
	echo $bold ? '<b>' .$teks. '</b>' : $teks;
}

print_teks('Indoesiaku');
// Mencetak dengan huruf tebal

print_teks('Indonesiaku', false);
// Mencetak dengan huruf reguler
?>

</body>
</html>