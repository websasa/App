
<?php

function count_vowels($word) {
    return preg_match_all('/[aeiou]/i', $word);
}

function count_consonants($word) {
    return preg_match_all('/[bcčćdđfghjklmnpqrsštvwxyzž]/i', $word);
}


$data = json_decode(file_get_contents('words.json'), true);


if (isset($_POST['new_word'])) {
    $new_word = trim($_POST['new_word']);
    $error = '';
    if (empty($new_word)) {
        $error = 'Molim unesite riječ';
    } elseif (!preg_match('/^[a-z]+$/i', $new_word)) {
        $error = 'Riječ može sadržavati samo slova';
    } else {
        $word_data = array(
            'word' => $new_word,
            'length' => strlen($new_word),
            'vowels' => count_vowels($new_word),
            'consonants' => count_consonants($new_word),
        );
        $data['words'][] = $new_word;
        file_put_contents('words.json', json_encode($data));
    }
}


echo '<table border="2" align="center" width="600" bgcolor="#98faf8" cellspacing="5">';
echo '<tr><th>Riječ</th><th>Broj slova</th><th>Samoglasnici</th><th>Suglasnici</th></tr>';
foreach ($data['words'] as $word) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($word) . '</td>';
    echo '<td>' . strlen($word) . '</td>';
    echo '<td>' . count_vowels($word) . '</td>';
    echo '<td>' . count_consonants($word) . '</td>';
    echo '</tr>';
}
echo '</table>';


if (!empty($error)) {
    echo '<p style="color:red">' . htmlspecialchars($error) . '</p>';
}
echo '<form method="post">';
echo '<label>Upiši riječ:</label>';
echo "<br>";
echo '<input type="text" name="new_word">';
echo " &nbsp;";
echo '<input type="submit" value="Pošalji">';
echo '</form>';
?>	
	

