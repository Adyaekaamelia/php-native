<?php
class ucapan{
    public function siang(){
        return "Selamat siang";
    }
    public function sore(){
        return "Selamat sore";
    }
    public function __construct(){
        echo "Selamat pagi <br>";
    }
}

$selamat = new ucapan();
echo $selamat->siang()."<br>";
echo $selamat->sore();
?>