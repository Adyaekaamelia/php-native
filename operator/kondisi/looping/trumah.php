<?php
    for ($i = 1; $i <= 5; $i++){
        for ($j = 1; $j <= 5; $j++){
            echo $j + $i." ";
        }echo "<br>";
    }
    echo "<hr>";

    $n =0;
for ($a = 1; $a <= 10; $a++){
    $n += 2;
    for ($b = 1; $b <= $a; $b++){
        echo $b + $n." ";
    } echo "<br>";
}
?>