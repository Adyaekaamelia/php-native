<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Adya Eka Amelia",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika "],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Bermain"],
            ["Hobi" => "Traveling"]]],

            [ "nama" =>
             "Irma Meylani",
            "MataKuliah" => [
            ["MataKuliah" => "Ipa"],
            ["MataKuliah" => "Ips"],
            ["MataKuliah" => "Sejarah"]],
            
            "Hobi" => [
            ["Hobi" => "Main Tiktok"],
            ["Hobi" => "Bermain"]]],

            [ "nama" => "Juliska Kiara Condong",
            "MataKuliah" => [
            ["MataKuliah" => "RPL"],
            ["MataKuliah" => "DATABASE"],
            ["MataKuliah" => "OOP"]],

            "Hobi" => [
            ["Hobi" => "Membaca"],
            ["Hobi" => "Travelling"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Aditya",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Futsal"],
            ["Hobi" => "Bermain "]]],

            [ "nama" =>
             "Ruslan",
            "MataKuliah" => [
            ["MataKuliah" => "IPA"],
            ["MataKuliah" => "KIMIA"],
            ["MataKuliah" => "FISIKA"]],
            
            "Hobi" => [
            ["Hobi" => "Meneliti"],
            ["Hobi" => "Berkuda"]]],

            [ "nama" => "alifba",
            "MataKuliah" => [
            ["MataKuliah" => "Ppkn"],
            ["MataKuliah" => "Bahasa Inggris"],
            ["MataKuliah" => "Bahasa Jepang"]],

            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "Membaca"]]],
        ]
        ],
    ];
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
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>