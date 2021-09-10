<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    "judul" => "belajar PHP & MYSQL untuk pemula",
    "penulis" => "petanikode"
],
[
    "judul" => "tutorial PHP dari nol hingga mahir",
    "penulis" => "petanikode"
],
[
    "judul" => "membuat aplikasi web dengan PHP",
    "penulis" => "petanikode"
];

//menampilkan array
foreach($artikel as $post){
    echo "<h2>". $post["judul"]."</h2>";
    echo "<p>". $post["penulis"]. "<p>";
    echo "<hr>";
}
?>