<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
<form action ="" method="post">
    <fieldset><table>
        <tr>
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama"><br></td>
            </tr>
                <tr>
                    <td>Nim </td>
                    <td> : </td>
                    <td><input type="number" name="nim"><br></td>
                </tr>
                <tr>
                    <td>Nilai </td>
                    <td> : </td>
                    <td><input type="number" name="nilai" max=100 min=0><br></td>
                </tr>
                <tr>
                <td>Nama Dosen</td>
                <td> : </td>
                <td><input type="text" name="dosen"><br></td>
            </tr>
            <tr>
                <td>Matakuliah</td>
                <td> : </td>
                <td><input type="text" name="matkul"><br></td>
            </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="proses"></td>
                </tr>
</table>

                <?php
if (isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class Mahasiswa
    {
        public function __construct($nama, $nim, $nilai, $dosen, $matkul)
        {
            $this->nama = "$nama";
            $this->nim = "$nim";
            $this->nilai = "$nilai";
            $this->dosen = "$dosen";
            $this->matkul = "$matkul";

        }
    }
    class matakuliah extends Mahasiswa
    {
        public function data()
        {
            if ($this->nilai >= 85) {
                $grade = "A, Lulus";
            } elseif ($this->nilai >= 75) {
                $grade = "B, Lulus";
            } elseif ($this->nilai >= 65) {
                $grade = "C, Perbaikan";
            } elseif ($this->nilai <= 65) {
                $grade = "D, Tidak Lulus";
            }
            return $grade;
        }
    }
    $mahasiswa = new matakuliah($nama, $nim, $nilai, $dosen, $matkul, );
    echo "Nama : " . $mahasiswa->nama . "<br>";
    echo "Nim : " . $mahasiswa->nim . "<br>";
    echo "Nilai : " . $mahasiswa->nilai . "<br>";
    echo "Nama Dosen : " . $mahasiswa->dosen . "<br>";
    echo "Mata kuliah : " . $mahasiswa->matkul . "<br>";
    echo "Status : " . $mahasiswa->data();
}

?>

    </fieldset>
</form>
</body>
</html>