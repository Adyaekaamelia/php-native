<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pembayaran</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td> : </td>
                    <td><input type="text" name="nama"><br></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td> : </td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td> : </td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
            <td>Sistem Pembayaran </td>
            <td> : </td>
            <td><select type="text" name="sistem" >
            <option value= cash > cash</option>
            <option value= M-Banking > M-Banking</option>
            <option value= gopay > gopay</option>
            <option value= pickUp > pickUp</option>
            </select></td>
            </tr>
            <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="proses"></td>
                </tr>
            </table>


<?php
if (isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $pesanan = $_POST['jumlah'];
    $sistem = $_POST['sistem'];

}

?>

        </fieldset>
    </form>
</body>
</html>
