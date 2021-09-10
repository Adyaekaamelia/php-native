<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Irma meylani",
            "MataKuliah" => [["MataKuliah" => "Matematika"],["MataKuliah" => "Kedokteran"],["MataKuliah" => "IPA"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "Nari"]]],

            [ "nama" => "Adya Eka Amelia",
            "MataKuliah" => [["MataKuliah" => "OOP"],["MataKuliah" => "RPL"],["MataKuliah" => "DATABASE"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "Kuliner"]]],

            [ "nama" => "Juliska kiara condong",
            "MataKuliah" => [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "makan"],["Hobi" => "Dance"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Ali ",
            "MataKuliah" => [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "lari"]]],

            [ "nama" => "Adit ",
            "MataKuliah" => [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => [["Hobi" => "Traveling"],["Hobi" => "Kuliner"]]],

            [ "nama" => "Jojo ",
            "MataKuliah" => [["MataKuliah" => "RPL"],["MataKuliah" => "Bisnis"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Nyanyi"],["Hobi" => "membaca"]]],
        ]
        ],
    ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['MataKuliah'] as $sub) {
                echo "<li>". $sub['MataKuliah']. "</li>";
            }
            echo "</ol>";
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
    } echo "</ul>";
    }
?>