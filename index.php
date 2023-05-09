<?php 

$string = "Ceci est une chaîne de caractère.";
$delimiter = ' ';

$words = explode($delimiter, $string);

foreach ($words as $word) {
    echo $word;
    echo "<br/>";
}

?>