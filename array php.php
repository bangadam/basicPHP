<?php 
//array php

//------tipe data array-----////
$hewan = array('koala', 'buaya', 'tikus', 'kucing');
$nama  = ['bangadam', 'dafa', 'garis', 'basori'];

echo "<h1>tipe data array</h1>";
print_r($hewan);//untuk menampilkan baris array
echo "<br>";
echo $nama[3];//untuk menampilkan salah satu array



//------- metode array ------//
//sperti : array_unique(), array_reverse(), shuffle(), count(), sort()
echo "<h1>metode array</h1>";

//array_unique = menampilkan array uniq
print_r(array_unique($nama));
echo "<br>";

//array_reverse() = menampilkan array secara terbalik
print_r(array_reverse($nama));
echo "<br>";

//shuffle, = meanmpilkan array seacra acak nb: harus di shuffle dahulu baru di print_r
shuffle($hewan);
print_r($hewan);
echo "<br>";

//count() = menghitung isi array
echo "isi array nama adalah = " . count($nama);
echo "<br>";

//sort() = mengurutkan array berdasarkan abjad/dari yang terkecil
sort($hewan);
print_r($hewan);

//------ Associative Array PHP ----///
echo "<h1>Associative Array</h1>";
//Key => isi
$data = [
	"nama" 	=> "bangadam",
	"umur"	=> 17,
	"kerja"	=> "presiden"
];
$data2 = array(
	'pacar'		=> 'tidak ada',
	'laptop'	=> 'gateway'
);

//$data ['nama'] = "bangadam ganteng"; untuk mengganti nilai array
//print_r($data); untuk menampilkan row array
//echo $data ['umur']; untuk menampilkan salah satu array
echo "Nama Saya Adalah " . $data ['nama']; 
echo "<br>";

//------ Metode Associative Array PHP ----//
//seperti : array_values, array_keys, array_merge

//array_values = berguna unutk menampilkan nilai dari sebuah array
print_r(array_values($data2));
echo "<br>";
//array_keys = menampilkan keys atau kunci dari sebuah array
print_r(array_keys($data));
echo "<br>";
//array_merge = menggabungkan array
print_r(array_merge($data, $data2));
echo "<br>";


//--------Multi dimensi array -----///
//multi dimensi array adalah array di dalam array
echo "<h1>Multi Dimensi array</h1>";
$kotak = array(
	['bangadam', '17', 'programmer'],
	['dafa', '8', 'desainer'],
	['kingboar', '25', 'web master']
);
/**
 * bentuk dari multi dimensi di atas adalah 
 * 00 01 02
 * 10 11 12
 * 20 21 22
 */
//$kotak[0][0] = "BangJack"; // untuk mengganti nilai dari array di atas
echo "data dari \$kotak adalah " . $kotak[0][0];//unutk menampilkan salah satu dari array di atas

 ?>
