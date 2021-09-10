<?php

    $nilai = 100;
    if ($nilai >= 90 ){
    echo "A";
    }else   if($nilai >= 80 ){
    echo "B";
    }else   if($nilai >= 70 ){
    echo "C";
    }else   if($nilai >= 60 ){
    echo "D";
    }else {
    echo "E";
    }

    echo "<hr>";

    $nilai = "B";
    switch ($nilai) {
    case 'A' : $grade = "Pertahankan"; break;
    case 'B' : $grade = "Harus Lebih Baik Lagi"; break;
    case 'C' : $grade = "Perbanyak Belajar"; break;
    case 'D' : $grade = "Jangan Keseringan Main"; break;
    case 'E' : $grade = "Kebanyakan Bolos"; break;
    default : $grade = "Format Tidak Sesuai";
    }
    echo "<b>$grade</b>";
    echo "<hr>";


    $nilai = 80;

    if ($nilai >= 90) {
    $grade = "A";
    }   elseif ($nilai >= 80) {
    $grade = "B";
    }   else if ($nilai >= 70) {
    $grade = "C";
    }   elseif ($nilai >= 60) {
    $grade = "D";
    }   else {
    $grade = "Anda harus remedial";
    }

    switch ($grade) {
    case 'A' : $ket = "Pertahankan"; break;
    case 'B' : $ket = "Harus lebih baik lagi"; break;
    case 'C' : $ket = "Perbanyak belajar"; break;
    case 'D' : $ket = "Jangan keseringan mai n"; break;
    case 'E' : $ket = "Kebanyakan bolos"; break;
    default : $ket = "Format Tidak Sesuai";
}

    echo "Nilai : $nilai <br>";
    echo "Grade : $grade <br>";
    echo "Keterangan : $ket <br>";


?>