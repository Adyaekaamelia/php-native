<?php
class komputer
{
    private $jenisProcessor = "Intel Core 17";

    protected function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}

class Laptop extends komputer
{
    public function getProcessor()
    {
        return $this->jenisProcessor;
    }
}

$komputer = new komputer();
$laptop = new Laptop();
echo $komputer->tampilkanJenisProcessor();
echo $laptop->getProcessor();
