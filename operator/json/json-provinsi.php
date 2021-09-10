<?php

$url = "https://api.kawalcorona.com/indonesia/provinsi/";
//persiapan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//eturn the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$dataCovid = curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
//echo $output;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <nav>
        <a href ="json-api.php">Data Covid</a>
        <a href="json-indonesia.php">Data Indonesia</a>
        <a href="json-provinsi.php">Data Covid Provinsi</a>
        <a href="json-global-positif.php">Data Global Positif</a>
        <a href="json-meninggal.php">Data Meninggal</a>
    </nav>
    </center>
    <fieldset>
        <legend>Data Provinsi</legend>
        <table border=1 width="100%">
            <tr>
                <th>FDI</th>
                <th>Kode Provinsi</th>
                <th>Provinsi</th>
                <th>Kasus Positif</th>
                <th>Kasus Sembuh</th>
                <th>Kasus Meninggal</th>
            </tr>
            <?php
            $FDI = 1;
            $data = json_decode($dataCovid);
            foreach ($data as $covid) {?>
            <tr>
                <td><?php echo $FDI++?></td>
                <td><?php echo $covid->attributes->Kode_Provi; ?></td>
                <td><?php echo $covid->attributes->Provinsi;?></td>
                <td><?php echo $covid->attributes->Kasus_Posi;?></td>
                <td><?php echo $covid->attributes->Kasus_Semb;?></td>
                <td><?php echo $covid->attributes->Kasus_Meni;?></td>
            </tr>
            <?php }?>
        </table>
    </fieldset>
</body>
</html>