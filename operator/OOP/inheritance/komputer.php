<?php

class komputer
{
    public $merk;
    public $processor;
    public $memori;

    public function beliKomputer()
    {
        return " Beli Komputer Baru";
    }
}

class Laptop extends komputer
{
    public function lihatSpec()
    {
        return "merk: $this->merk, processor: $this->processor, memori: $this->memori";
    }
}
// buat objek dari class laptop (instansiasi)
$laptop = new Laptop();

// isi property objek
$laptop->merk = "asus";
$laptop->processor = "intel core i5";
$laptop->memori = "4 GB";

//panggil method objek
echo $laptop->beliKomputer();
echo "<br />";
echo $laptop->lihatSpec();
