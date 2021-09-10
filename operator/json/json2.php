<?php
$json ='{
    "nama": "Adya",
    "domisili": "Bandung",
    "usia": 17,
    "wni": true,
    "hobi": [
    "Berenang", "Membaca", "Bertamasya"
  ]
}';

$data = json_decode($json);

echo "Nama: {$data->nama} <br>";
echo "Domisili: {$data->domisili} <br>";
echo "Usia: {$data->usia} <br>";
echo "Wni: {$data->wni} <br>";
echo "Hobi: " . implode(", ", $data->hobi);
?>