<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Lingkaran</title>
</head>
<body>
    <fieldset>
        <legend>Menghitung luas dan keliling Lingkaran</legend>
    <form action="" method="post">
        Masukkan Nilai :
    <input type="number" name="jari">
    <input type="submit" name="submit">
    </form>
</fieldset>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    function luasLingkaran($jari, $phi = 3.14) 
    {
        $luas = $jari * $phi * $jari;
        return $luas;
    }
    function keliling($jari, $phi = 3.14)
    {
        $keliling = ($jari * $phi) * 2;
        return $keliling;
    }
    echo "Jari- jari : ";
    echo $_POST['jari'];
    echo "<br>";
    echo "Luas Lingkaran : ";
    echo luasLingkaran($_POST['jari']);
    echo "<br>";
    echo "Keliling : ";
    echo keliling($_POST['jari']);
}
?>