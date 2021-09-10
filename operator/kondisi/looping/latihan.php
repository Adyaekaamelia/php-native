<?php 
//soal 1
$i = 2; 
do { 
 echo "$i "; 
 $i *=2; 
} while ($i <= 130); 
echo "<br><br>";

//soal 2
for ($a = 3125; $a >=5; $a /=5){
    echo"$a ";
}
echo "<br><br>";

//soal 3
$books =[
    18,45,29,61,47,34
];
foreach ($books as $book){
    $sisa = $book % 3;
    echo "$book % 3 = $sisa<br>";
}
echo "<br><br>";
 
//soal 4
$s=5;
	for($a=$s;$a>0;$a--){
	for($b=$s;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}

for ($i =0; $i < 5; $i++){
    for ($a =5; $a > $i; $a--){
        echo "_";
    }
    for ($b = 0; $b <= $i; $b++){
        echo"*";
    }
    echo "<br>";
}

?> 
