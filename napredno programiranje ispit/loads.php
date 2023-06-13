<?php
  //zadatak cetvrti kreirajte autoloader za automatsko učitanje svih klasa


spl_autoload_register(function ($className) {
    $classFile = dirname(__FILE__) . '/' . $className . 'class.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});
//mogli smo koristiti i DIR umjesto FILE ako se  sve klase nalaze u istom direktoriju