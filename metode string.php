<?php 
//metode string 
/*
	strlen() 		 = menghitung jumlah huruf pada string
	str_word_count() = menghitung jumlah kata pada string
	str_replace()	 = melakukan peggantian kata pada string
	str_repeat()	 = melakukan pengulangan string 
	str_shuffle()	 = melakukan pengacakan pada string
	strrev()		 = membalik sebuah string
	strtolower()	 = membuat string menjadi huruf kapital
	strtoupper()	 = membuat string mrnjadi huruf besar	
 */
$string 	= "bangadam males ngoding";
$string2 	= "BANGADAM MALES NGODING";

//strlen()
echo "fungsi strlen() = " . strlen($string);

echo "<br>";

//str_word_count()
echo "fungsi str_word_count() = " . str_word_count($string);

echo "<br>";

//str_replace()->parameter("kata yang akan diubah", "diubah menjadi apa", variabel/string)
echo "fungsi str_replace() = " . str_replace("males", "rajin", $string);

echo "<br>";

//strrev()
echo "fungsi strrev() = " . strrev($string);

echo "<br>";

//strtolower()
echo "fungsi strtolower() = " . strtolower($string2);

echo "<br>";

//strtoupper()
echo "fungsi strtoupper() = " . strtoupper($string);
 ?>