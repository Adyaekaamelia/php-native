<?php
//Looping PHP JSON

$dataMhs = '[
    { "nama": "Nurul ", "Domisili":"Bandung"},
    { "nama": "Adya ", "Domisili":"Bandung"},
    { "nama": "Huda", "Domisili":"Cirebon"},
    { "nama": "ida", "Domisili":"Bandung"}
]';

$data = json_decode($dataMhs);
foreach ($data as $mhs){
    echo "Nama :" . $mhs->nama . "<br>";
    echo "Domisili :" .$mhs->Domisili;
    echo"<hr>";
}
?>