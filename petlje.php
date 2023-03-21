<?php



while ($a <= 10){
    echo$a ." \n";
    $a++;
}


for ($b =1; $b <= 100; $b++){
    if($b%2==0){
        echo $b . "\n";
    }
}


$names = ['Ivan','Marko','Ana','Branimir','Marija'];

foreach($names as $key => $value){

    echo $key . '=' .$value . '\n';
}