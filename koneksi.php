<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pwd4";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 

if(!$koneksi){
die ("Koneksi database gagal: ".mysqli_connect_errno().
" - ".mysqli_connect_error());
     }
?>