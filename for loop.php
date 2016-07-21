<?php 
echo "<h1>For Loop</h1>";
//------------For Loop-----//
//for loop adalah bentuk perulangan
//for(variabel, batas/syarat, perubahan)
//for ($i=1; $i <= 5 ; $i++) { 
//	echo "belajar php dasar" . "<br>";
//}

//-----For Loop array----//
// $hewan = ['anjing', 'kucing', 'elang', 'garuda'];
// //count($variabel) = berfungsi untk menghitung jumlah array di atas 
// for ($i=0; $i < count($hewan) ; $i++) { 
// 	echo "-------------";
// 	echo $hewan[$i];
// 	echo "------------- <br>";
// }

//------Foreach associative array----//
$data = [
	"nama" 	=> "bangadam",
	"umur"	=> 17,
	"pekerjaan" => "programmer" 
];
//foreach($variabel as $key(untuk menacari keys array) => $value(ubtuk mencari nilai array))
foreach ($data as $key => $value) {
	echo $key . "=>" . $value . "<br>";
}
 ?>