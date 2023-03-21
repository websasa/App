<?php
 function funkcija($number) {
    static $lokalna;
    $lokalna += $number;
    return $lokalna;
}

$funkcijaKaoV = 'funkcija';

for($i=0; $i < 5; $i++) {
    print_r($funkcijaKaoV(rand(1,10)));
    echo "\n";
} 

