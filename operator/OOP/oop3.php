<?php 

    //mendefinisikan sebuah object class
    class kucing{
        //membuat properti atau atribut
        public $warna ="Coklat";

        //construct adalah method khusus yang akan dipanggil pertama kali
        public function __construct($warna){
            $this->warna = $warna;
        }
         //membuat method (behavlor /)
         public function bersuara(){
            return "Meow..meow..meow...";
        }
        public function berburu(){
            return "Berburu ikan";
        }
    }
    //membuat object (inisiasi object)
    $kucing1 = new kucing("hitam");
    echo "Warna Kucing 1 : " . $kucing1->warna . "<br>";

    $kucing2 = new kucing("oren");
    echo "Warna Kucing 2 : " . $kucing2->warna . "<br>";


    ?>
