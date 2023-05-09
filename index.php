<?php 

$number1 = -3;
$number2 = -4;

if ($number1 > $number2) {
    echo $number1;
} elseif ($number1 === $number2) {
    echo "Les chiffres sont égaux";
} else {
    echo $number2;
}

/* echo ($number1 > $number2) ? $number1 : $number2; */

?>