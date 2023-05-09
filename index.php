<?php 

function writeNumber(int $number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "<br/>";
        for ($j = 0; $j < $i; $j++)
        echo $i;
    }
}

echo writeNumber(9);

?>
