<?php

$a = 5;
$b = 10;
$c = 15;
if($b > $a && $b < $c || $b < $a && $b > $c){
    
        echo "b je između a i c \n ";
    }
    else
    {
        echo "b nije između a i c \n ";
    } 


    switch (date('N')) {
        case 0:
            echo "Ponedjeljak\n";
            break;
        case 1:
            echo "Utorak\n";
            break;
        case 2:
            echo "Srijeda\n";
            break;
        case 3:
            echo "Četvrtak\n";
            break;
        case 4:
            echo "Petak\n";
            break;
        case 5:
            echo "Subota\n";
            break;
        case 6:
            echo "Nedjelja\n";
            break;
            
          
    } 