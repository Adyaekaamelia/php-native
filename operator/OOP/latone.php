<?php
 
class komputer{
    public $pemilik = "Adya";
    public $merk = "Asus";
    public $ukuran = 14;
    
    public function nyala(){
        return "Komputer bisa dinyalakan";
    }
    public function mati(){
        return "Komputer bisa dimatikan";
    }
}

    $komputer1 = new komputer();
    echo "Pemilik : " . $komputer1->pemilik . "<br>";
    echo "Merk : " . $komputer1->merk . "<br>";
    echo "Ukuran Layar : " . $komputer1->ukuran . "<br>";
    echo "Sifat Komputer : " . $komputer1->nyala() . "<br><br>";

    $komputer2 = new komputer();
    $komputer2->pemilik ="Eka";
    $komputer2->merk ="lenovo";
    echo "Pemilik : " . $komputer2->pemilik . "<br>";
    echo "Merk : " . $komputer2->merk . "<br>";
    echo "Ukuran Layar : " . $komputer2->ukuran . "<br>";
    echo "Sifat Komputer : " . $komputer2->mati() . "<br><br>";

    $komputer3 = new komputer();
    $komputer3->pemilik ="Amelia";
    echo "Pemilik : " . $komputer3->pemilik . "<br>";
    echo "Merk : " . $komputer3->merk . "<br>";
    echo "Ukuran Layar : " . $komputer3->ukuran . "<br>";
    echo "Sifat Komputer : " . $komputer3->nyala() . "<br><br>";

    $komputer4 = new komputer();
    $komputer4->pemilik ="Ali";
    $komputer4->merk ="lenovo";
    echo "Pemilik : " . $komputer4->pemilik . "<br>";
    echo "Merk : " . $komputer4->merk . "<br>";
    echo "Ukuran Layar : " . $komputer4->ukuran . "<br>";
    echo "Sifat Komputer : " . $komputer4->mati() . "<br><br>";

    $komputer5 = new komputer();
    $komputer5->pemilik ="Baim";
    echo "Pemilik : " . $komputer5->pemilik . "<br>";
    echo "Merk : " . $komputer5->merk . "<br>";
    echo "Ukuran Layar : " . $komputer5->ukuran . "<br>";
    echo "Sifat Komputer : " . $komputer5->nyala() . "<br><br>";

    ?>


