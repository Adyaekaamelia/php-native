<?php
class masukLine
{
    public $name = "Adya eka amelia";
    protected $id = "130304";
    private $password = "0000";

    public function login()
    {
        $a = $this->id;
        $b = $this->password;
        if ($a == "130304" && $b == "0000") {
            $c = "Login Berhasil";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->id;
        $b = $this->password;
        $d = $this->name;
        $c = "Id : " . $a . "<br>" . " Nama : " . $d;
        return $c;
    }
}
$line = new masukLine();

echo $line->info() . "<br>";
echo "login : " . $line->login();
