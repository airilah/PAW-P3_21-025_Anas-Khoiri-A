<?php
echo "BERIKUR ISI DARI FILE TAMBAHAN/SESSION: ";
echo "<br>";
session_start();
echo "Nama : ".$_SESSION["nama"];
echo "<br>";
echo "NIM : ".$_SESSION["nim"];
echo "<br>";
echo "Prodi : ".$_SESSION["prodi"];
echo "<br>";
echo "Angkatan : ".$_SESSION["angkatan"];
echo "<br>";
?>