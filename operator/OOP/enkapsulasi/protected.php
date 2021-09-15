<?php
class laptop
{
    public $pemilik;
    protected function hidupkanLaptop()
    {
        return "Hidupkan Laptop";
    }
    public function paksaHidupkanLaptop()
    {
        return $this->hidupkanLaptop();
    }
}

$laptopAnto = new laptop();
$laptopAnto->pemilik = "Anto";

echo $laptopAnto->pemilik . "<br>";
echo $laptopAnto->hidupkanLaptop();
echo $laptopAnto->paksaHidupkanLaptop();
