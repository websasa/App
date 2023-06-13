<?php
//zadatak broj pet kreirajte index.php datoteku u koju se trbate spojiti koristeće postojeće klase
require_once 'configuration.php';


$host = 'localhost';
$database = 'mydatabase';
$username = 'myusername';
$password = 'mypassword';

// spajanje na bazu
$dbConnection = new DatabaseConnection($host, $database, $username, $password);
$connection = $dbConnection->getConnection();


if (!$connection) {
    die('Niste se spojili na bazu.');
}


echo 'spojeni ste na bazu.';

