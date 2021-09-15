<?php
class komputer
{
    protected $jenisProcessor = "Intel Core 17";

    protected function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}

class Laptop extends komputer
{
    public function getProcessor()
    {
        return $this->tampilkanJenisProcessor();
    }
}

$laptop = new Laptop();
echo $laptop->getProcessor();
