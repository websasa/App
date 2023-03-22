<?php
// Read the word entered in the HTML form
$word = $_POST['word'];

// Define a function to count the number of vowels in a word
function count_vowels($word) {
  $vowels = array('a', 'e', 'i', 'o', 'u');
  $count = 0;
  for ($i = 0; $i < strlen($word); $i++) {
    if (in_array(strtolower($word[$i]), $vowels)) {
      $count++;
    }
  }
  return $count;
}

// Define a function to count the number of consonants in a word
function count_consonants($word) {
  $vowels = array('a', 'e', 'i', 'o', 'u');
  $count = 0;
  for ($i = 0; $i < strlen($word); $i++) {
    if (!in_array(strtolower($word[$i]), $vowels) && ctype_alpha($word[$i])) {
      $count++;
    }
  }
  return $count;

?>

