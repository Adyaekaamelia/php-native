<html>
 <head><title>Tugas Inheritance</title></head>
 <body>
     <form action="" method="post">
        <fieldset>
            <table>
                <tr>
            <td>Pilih Mahluk </td>
            <td> : </td>
            <td><select type="text" name="jenis" >
            <option value= Manusia > Manusia</option>
            <option value= Malaikat > Malaikat</option>
            <option value= Jin > Jin</option>
            <option value= Setan > Setan</option>
            </select></td>
            </tr>

<tr>
    <td></td><td></td>
    <td>
 <input type="submit" name="Input" value="Input"></td>
</tr>
 </table>
</form>
 </fieldset>
 </body>
</html>
<?php
if (isset($_POST['Input'])) {
    $jenis = $_POST['jenis'];

    class jenisMahluk
    {
        public function __construct($a)
        {
            $this->jenis = "$a";

        }
    }

    class mahluk extends jenisMahluk
    {
        public function tugasMahluk()
        {
            if ($this->jenis == "Manusia") {
                $tugas = "Beribadah Kepada Tuhan";
            } elseif ($this->jenis == "Malaikat") {
                $tugas = "Beribadah Kepada Tuhan";

            } elseif ($this->jenis == "jin") {
                $tugas = "Ada yang beribadah ada yang tidak";

            } else {
                $tugas = "menggangu manusia";

            }

            return $tugas;
        }
    }

    $mahluk = new mahluk($jenis);
    echo "jenis mahluk :" . $mahluk->jenis . "<br>";
    echo "sifat mahluk :" . $mahluk->tugasMahluk();
}