<?php

// array
// variable yang memiliki banyak nilai
// array bisa memilik tipe data yang berbeda
// array berpasangan antara key dan value
// key adalah index yang di mulai dari 0
// mebuat array 
// cara lama
$hari = array("Senin","Selasa", "Rabu");
// cara baru
$bulan =["Januari", "Febuari", "Maret"];
$arr1 = [123,"tulisan",true];

// menampilkan array 
// var_dump /print_r()

// var_dump($hari);
// echo"<br>";
// print_r($bulan);

// show one element in array
// echo"<br>";
// echo $arr1[0];
// echo"<br>";
// echo $bulan[1];

// add new element ini array

var_dump($hari);
$hari[]= "Kamis";
$hari[]= "Jumat";
echo "<br>";
var_dump($hari);

?>