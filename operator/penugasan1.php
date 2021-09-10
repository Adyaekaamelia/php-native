<?php
    $awaluang = 100000;
    $minum = 15000;
    $sosis = 25000;

    echo "Uang ucup = <b>$awaluang</b>";
    echo "<hr>";

    $awaluang -= $minum;
    echo "jajan minum <b>$minum</b>";
    echo "<br>sisa uang ucup jajan minum = <b>$awaluang</b>";
    echo "<hr>";

    $awaluang -= $sosis;
    echo "jajan sosis bakar <b>$sosis</b>";
    echo "<br>sisa uang ucup jajan minum + sosis bakar = <b>$awaluang</b>";
    echo "<hr>";

    $sedekah = $awaluang * 0.1;
    echo "sedekah ke musafir 10% dari <b>$awaluang</b> yaitu sebesar <b>$sedekah</b>";
    $awaluang -= $sedekah ;
    echo "<br>sisa uang ucup = <b>$awaluang</b>";
    echo "<hr>";

    $nemuUang = $awaluang * 0.5;
    echo "nemu uang dijalan 50% dari sisa uang ucup <b>$awaluang</b> yaitu sebesar <b>$nemuUang</b>";
    echo "<br>sisa uang ucup sekarang = <b>$nemuUang + $awaluang</b>";
    echo "<hr>";

    $awaluang += $nemuUang;
    echo "total uang ucup adalah <b>Rp. $awaluang</b>";
?>