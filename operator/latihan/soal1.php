<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data array</title>
</head>
<body>
    <fieldset>
        <legend>Program masuk sekolah</legend>
        <form action ="" method="post">
            <table>
                <tr>
                    <th>Masukan jumlah data</th>
                    <td>: <input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <th>
                    </th>
                    <td>
                        <button type="submit" name="simpan">Simpan</button>
                        <button type="reset" >Reset</button>
                    </td>
                </tr>
            </table>
        </form>
</fieldset>
<?php
    if(isset($_POST['simpan'])){
        $row = $_POST['jumlah'];
    ?>
<fieldset>
    <legend>input Data siswa</legend>
    <table>
        <form action="soal1pro.php" method="post">
        <?php
        for($i = 1; $i <= $row; $i++){
        ?>
        <tr>
            <th colspan= 2> <?php echo $i; ?></th>
            <td>Nama</td>
            <td><input type="text" name="nama[]" ></td>
        </tr>
        <tr>
            <th colspan= "2"></th>
            <td>Asal sekolah</td>
            <td><input type="text" name="asal[]"></td>
        </tr>
        <tr>
            <th colspan= "2"></th>
            <td>Nilai bahasa indonesia</td>
            <td><input type="number" name="indo[]" min="1" max="100"></td>
        </tr>
        <tr>
            <th colspan= "2"></th>
            <td>Nilai bahasa inggris</td>
            <td><input type="number" name="inggris[]" min ="1" max="100"></td>
        </tr>
        <tr>
            <th colspan= "2"></th>
            <td>Nilai matematika</td>
            <td><input type="number" name="mtk[]" min="1" max="100"></td>
        </tr>
        <tr>
            <th colspan= "2"></th>
            <td>Nilai ipa</td>
            <td><input type="number" name="ipa[]" min="1" max="100"></td>
        </tr>
        
        <?php
        }
        ?>
        <tr>
            <th></th>
            <td><button type="submit" name="save">Simpan</button></td>
    </tr>
</form>
    </table>
    </fieldset>
    <?php
    }
    ?>
</body>
</html>