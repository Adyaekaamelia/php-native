<?php
//membuat array
$hobi = [
    "membaca",
    "menulis",
    "ngeblog"
];

//menambahkan isi pada indeks ke 3
$hobi[1] .= "coding";

//menghapus isi array
unset($hobi[1]);

//menambahkan isi pada indeks terakhir
$hobi[] = "olahraga";

//cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
?>