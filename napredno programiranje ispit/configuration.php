<?php

// Podaci za spajanje na bazu podataka
$servername = "localhost";
$username = "reaper";
$password = "chilli";
$database = "videoteka";

// Stvaranje veze s bazom podataka
$connf = mysqli_connect($servername, $username, $password, $database);

// Provjera veze
if (!$connf) {
    die("Niste se spojili na bazu podataka: " . mysqli_connect_error());
}

// Uspješno spajanje
echo "Uspješno ste se spojili na bazu podataka.";


?>
