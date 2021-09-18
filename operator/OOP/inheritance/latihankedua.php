<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Gofood</title>
</head>
<body>
    <fieldset>
        <table>
            <form action="" method="post">
                <legend>Pembayaran Gofood</legend>
                <tr>
                    <td>Nama Barang </td>
                    <td> : </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Harga Barang </td>
                    <td> : </td>
                    <td><input type="number" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td> : </td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td>Jenis Pembayaran</td>
                    <td> : </td>
                    <td><select name="pembayaran" id="">
                        <option value="cash">Cash</option>
                        <option value="m-banking">M-Banking</option>
                        <option value="gopay">Gopay</option>
                        <option value="pickup">Pickup</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="submit" value="Simpan"></td>
                </tr>
            </form>
        </table>
        <?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $pembayaran = $_POST['pembayaran'];

    class gofud
    {
        public $nama;
        public $harga;
        public $jumlah;
        public $pembayaran;

        public function __construct($a, $b, $c, $d)
        {
            $this->nama = $a;
            $this->harga = $b;
            $this->jumlah = $c;
            $this->pembayaran = $d;
        }
    }
    class pembayaran extends gofud
    {

        public function bayar()
        {
            $total = $this->harga * $this->jumlah;

            if ($total >= 250000) {
                $diskon = $total * (15 / 100);
                $nilai = (15 / 100) * $total;
                echo "Hasil Jumlah : " . $total . "<br>";
                echo "Mendapatkan Diskon 15 % : $nilai<br>";

            } else {
                $diskon = $total * 0.10;
                $nilai = (10 / 100) * $total;
                echo "Hasil Jumlah : " . $total . "<br>";
                echo "Mendapatkan Diskon 10 %: $nilai<br>";

            }

            if ($this->pembayaran == "cash") {
                $hasil = $total - $diskon;
            } else if ($this->pembayaran == "m-banking") {
                $jumlah = $total * (2.5 / 100);
                $hasil = $total - $diskon - $jumlah;
                $nilai = (2.5 / 100) * $total;
                echo "Mendapatkan Diskon 2.5% : $nilai<br>";
            } else if ($this->pembayaran == "gopay") {
                $jumlah = $total * (10 / 100);
                $hasil = $total - $diskon - $jumlah;
                $nilai = (10 / 100) * $total;
                echo "Mendapatkan Diskon 10 % : $nilai<br>";
            } else {
                $jumlah = $total * (1.5 / 100);
                $hasil = $total - $diskon - $jumlah;
                $nilai = (1.5 / 100) * $total;
                echo "Mendapatkan Diskon 1.5 % : $nilai<br>";
            }
            return $hasil;
        }

    }
}

$jadi = new pembayaran($nama, $harga, $jumlah, $pembayaran);
echo "Nama : " . $jadi->nama . "<br>";
echo "Harga : " . $jadi->harga . "<br>";
echo "Jumlah Pesanan : " . $jadi->jumlah . "<br>";
echo "Jenis Pembayaran : " . $jadi->pembayaran . "<br>";
echo "Total Pembayaran : " . $jadi->bayar();
?>
    </fieldset>
</body>
</html>