<?php

function textReturner(){
    return 'abcdef';
   }

   $savedText = textReturner();
   echo $savedText, "\n"; 


   function imePrezime($name, $surname) {

    $spojeno = $name . " " . $surname;
    $spojeno = strtoupper($spojeno);
    return $spojeno;
}

$rezultat = imePrezime("ana", "anic");
echo $rezultat; 