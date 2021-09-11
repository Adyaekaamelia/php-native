<?php 

    //mendefinisikan sebuah object class
    class kucing{
        //membuat properti atau atribut
        public $warna ="Coklat";
        public $jumlahKaki =4;
        public $jenisBulu = "panjang";
        public $makananFavorit = "Ikan Pindang";

        //membuat method (behavlor /)
        public function bersuara(){
            return "Meow..meow..meow...";
        }
        public function berburu(){
            return "Berburu ikan";
        }
    }
    //membuat object (inisiasi object)
    $kucing1 = new kucing();
    echo "Warna Kucing : " . $kucing1->warna . "<br>";
    echo "sifat kucing : " . $kucing1->bersuara() . "<br>";

    $kucing2 = new kucing();
    //set warna kucing
    $kucing2->warna ="oren";
    echo "Warna Kucing : " . $kucing2->warna . "<br>";
    echo "sifat kucing : " . $kucing2->berburu() . "<br>";

    ?>
