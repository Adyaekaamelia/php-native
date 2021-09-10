<?php
$books = [
    "Panduan belajar PHP untuk pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MYSQL",
    "Membuat Chat box dengan PHP",
];

echo "<h5>Judul Buku PHP :</h>";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li> $buku</li>";
}
echo "</ul>";
?>