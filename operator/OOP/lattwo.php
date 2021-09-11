<?php
    class segitiga {
        public $setengah = 0.5;
        public $alas = 10;
        public $tinggi = 15;
        public $sisi1 = 10;
        public $sisi2 = 15;
        public $sisi3 = 10;

        public function luas() {
            $luas = $this->setengah * $this->alas * $this->tinggi;
            return $luas; 
        }
        public function kel() {
            $kel = $this->sisi1 + $this->sisi2 + $this->sisi3;
            return $kel;
        }
    }

    $a = new segitiga();
    echo "Alas Segitiga  : ". $a->alas. "<br>";
    echo "Tinggi Segitiga : ". $a->tinggi. "<br>";
    echo "Sisi 1 : ". $a->sisi1. "<br>";
    echo "Sisi 2 : ". $a->sisi2. "<br>";
    echo "Sisi 3 : ". $a->sisi3. "<br>";
    echo "Luas Segitiga : ". $a->luas(). "<br>";
    echo "Keliling Segitiga : ". $a->kel(). " ";
?>