<?php
echo "Yang Mengisi di bawah ini adalah ";
echo "<br>";
$name= $_POST["nama"];
$nim=$_POST["nim"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];
echo "Nama : ".$name;
echo "<br>";
echo "NIM : ".$nim;
echo "<br>";
echo "Progran Studi : ".$prodi;
echo "<br>";
echo "Angkatan : ".$angkatan;
echo "<br>";
session_start();
$_SESSION["nama"]=$name;
$_SESSION["nim"]=$nim;
$_SESSION["prodi"]=$prodi;
$_SESSION["angkatan"]=$angkatan;
?>