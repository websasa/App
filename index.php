<?php
$integer = 20;
$float = 6.20;
$string = 'Nemam pojma';
$bool = true;

echo "Varijable:\nInteger: ",$integer,"\nReal:\n",$float,"\nString:",$string,"\nBoolean:",$bool, "\n\n";


const PI = 3.14;
const X =1;

echo "Konstante: \nPI:" ,PI, "Stupnjeva celzijevih:\nX:",X, "Pascala: \n\n:";


$a = 40;
$b = &$a;
echo'prvo a: ',$b,"\n";
$a = 64;
echo 'drugo a:',$b, "\n";
