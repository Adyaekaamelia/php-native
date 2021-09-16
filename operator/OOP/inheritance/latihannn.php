<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Inheritance</title>
</head>
<body>
<form action="" method="post">
        <fieldset>
                <tr>
                    <td>Jenis hamba </td>
                    <td>:</td>
                    <td><input type="number" name="jenis"></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
        </fieldset>
    </form>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    $jenis = $_POST['jenis'];
}
class manusia
{
    public $jenis;

    public function sifatManusia()
    {
        return "Beribadah kepada Tuhan";
    }
}

class malaikat extends manusia
{
    public function sifatMalaikat()
    {
        return "Beribadah kepada Tuhan";
    }
}
class jin extends malaikat
{
    public function __construct()
    {
        parent::__construct();
        echo "Ada yang taat beribadah <br />";
    }

    public function __destruct()
    {
        echo "Ada yang sesat tugasnya seperti setan <br />";
        parent::__destruct();
    }
}
class setan extends jin
{
    public function sifatMalaikat()
    {
        return "Beribadah kepada Tuhan";
    }
}
