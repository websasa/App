<?php

$file = file_get_contents ('words.json');
$words = json_decode ($file ,true);

function count_letters($word) {
  return strlen($word);
}

function count_vowels($word) {
  return preg_match_all('/[aeiou]/i', $word);
}

function count_consonants($word) {
  return strlen(preg_replace('/[aeiou]/i', '', $word));
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $new_word = trim($_POST['new_word']);

  //Provjerite nije li riječ prazna
  if (!empty($new_word)) {

    // Prebroji slova, samoglasnike i suglasnike u novoj riječi
    $new_word_count = count_letters($new_word);
    $new_word_vowels = count_vowels($new_word);
    $new_word_consonants = count_consonants($new_word);

    // Dodajte novu riječ  nizu riječi
    
    $words[] = $new_word;
    $analysis = array(
      'count' => $new_word_count,
      'vowels' => $new_word_vowels,
      'consonants' => $new_word_consonants
    );
    file_put_contents('words.json', json_encode($words));
// Prikaz uspješnog dodavanja
    $message = 'Uspješno ste dodali riječ!';
  } else {
    // Prikaži poruku o pogrešci ako je riječ prazna
    $error = 'Molim unesite riječ!';
  }
}
echo '<table border=2 bgcolor=#bbedea   align=center width=700 " cellpading="5" cellspacing="5">';
echo '<tr><th>Riječi</th><th>Broj slova</th><th>Broj samoglasnika</th><th>Broj suglasnika</th></tr>';
echo '<tr><th></th><th></th><th></th><th></th></tr>';
//  Iterirajte niz riječi i ispišite svaki redak tablice
foreach ($words as $word) {
  $word_count = count_letters($word);
  $word_vowels = count_vowels($word);
  $word_consonants = count_consonants($word);
  echo '<tr>';
  echo '<td>' . $word . '</td>';
  echo '<td>' . $word_count . '</td>';
  echo '<td>' . $word_vowels . '</td>';
  echo '<td>' . $word_consonants . '</td>';
  echo '</tr>';
}

echo '</table>';
if (isset($error)) {
  echo '<p style="color:red">' . $error . '</p>';
}

if (isset($message)) {
  echo '<p style="color:green">' . $message . '</p>';
}

?>