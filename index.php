<?php 

$age = -5;


if ($age >= 18 && $age > 0) {
    echo "Je suis majeur";
} elseif ($age < 18 && $age > 0) {
    echo "Je suis mineur";
} else {
    echo "Vous n'êtes pas humain";
}


switch ($age) {
    case $age >= 18 && $age > 0:
        echo "Je suis majeur";
    break;
    case $age < 18 && $age > 0: 
        echo "Je suis mineur";
    break;
    default:
        echo "vous n'êtes pas humain";
}

?>