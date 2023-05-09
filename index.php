<?php 

 function isPrime(int $number)
 {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
 }

 function viewPrime()
 {
    $count = 0;
    $number = 2;

    while ($count < 5) {
        if (isPrime($number)) {
            $count++;
            echo $number . "<br/>";
        } $number++;
    } 
 }

 viewPrime();

?>