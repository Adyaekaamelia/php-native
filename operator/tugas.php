<?php
    $a = 1;
    $b = 9;
    $c = 10;
    $d = 11;

    echo "$a < $c : ". ($a < $c);
    echo "<br>($b > $c :) && ($c > $b) : ". (($b > $c) && ($c > $b));
    echo "<br>($c > $d :) || ($b < $c) : ". (($c > $d) || ($b < $c));
    
    //soal2
    $uangToni = 10000;
    $uangTini = 8000;
    $uangTono = 15000;

    echo "<br>($uangToni > $uangTono :) && ($uangToni > $uangTini) :". (($uangToni > $uangTono) && ($uangToni > $uangTini));
    echo "<br>($uangToni > $uangTini :) || ($uangToni < $uangTini) :". (($uangToni > $uangTini) || ($uangToni < $uangTini));

    //soal3
    $user = "Adyaeka";
    $email = "adyaka@gmail.com";
    $pass = 134 ;

    echo "<br>Username / Email : <b>$user</b>";
    echo "<br>Password : <b>$pass</b>";
    echo "<br>Cek Login : ". 
    (($user && $pass ) && ($user && $pass));
    
?>