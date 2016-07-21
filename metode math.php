<?php 
/*
Metode math adalah sebuah metode yang dialkukan menggunakan rumus matematika seperti fungssi berikut:
round(),rand(), max(), min()
 */

$angka 	= 10;
$angka2 = 5.34;
$angka3 = array(1,4,5,6,3,8);

//metode round() = membulatkan sebuah bilangan
echo "angka sebelumnya 5.34 dibulatkan menjadi = " . round($angka2);

echo "<br>";

//metode rand() = menampilkan angka secara acak dengan parameter rand(min, max)
echo "angka random = " . rand(1, 100);

echo "<br>";

//metode max()	= menemukan angka tertinggi dari sebuah nilai
echo "angka terbesar dari 1,4,5,6,3,8 adalah = " . max($angka3);
 
echo "<br>";

//metode min()	= menemukan angka terkecil dari sebuah nilai
echo "angka terkecil dari 1,4,5,6,3,8 adalah = " . min($angka3);
 

 ?>