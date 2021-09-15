<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari kebenaran kucing</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <tr>
                <td>Warna Kucing</td>
                <td> : </td>
                <td><input type="text" name="warna"><br></td>
            </tr>
                <tr>
                    <td>Masukkan jumlah kaki </td>
                    <td>:</td>
                    <td><input type="number" name="kaki"></td>
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
    $warna = $_POST['warna'];
    $kaki = $_POST['kaki'];
}
class kucing
{
    public $warna;
    public $kaki;

    public function ket($warna, $kaki)
    {
        if ($kaki == 4) {
            echo "Kucing Berwarna : " . $warna . "<br>";
            echo "Memiliki Kaki : " . $kaki . "<br>";
            echo "Keterangan : Kucing Normal";
        } else if ($kaki <= 3) {
            echo "Kucing Berwarna : " . $warna . "<br>";
            echo "Memiliki Kaki : " . $kaki . "<br>";
            echo "Keterangan : Kucing tersebut cingked";
        } else if ($kaki >= 5) {
            echo "Kucing Berwarna : " . $warna . "<br>";
            echo "Memiliki Kaki : " . $kaki . "<br>";
            echo "Keterangan : Kucing Siluman";
        }
    }
}
$kucing1 = new kucing();
echo $kucing1->ket($warna, $kaki);
