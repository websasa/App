<?php

if(!empty($ime) && !empty($prezime)){
    echo "$ime $prezime";
  } else if(empty($ime)){
    if(empty($prezime)){
      echo "Nije upisano ime ni prezime!";
    } else {
      echo "Nije upisano ime!";
    } 
  } else {
    echo "Nije upisano prezime!";
  } 


  if($_GET['pojam'])
  {
      echo $_GET['pojam'] . " ";
  }
  else {
      echo "No data. ";
  } 