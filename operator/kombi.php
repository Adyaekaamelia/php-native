<?php
   $nilai = 85;
   $nilaia = 81;
  
   $jawab = $nilai >= 85 && $nilaia >= 83 ? "<b>Lulus</b>" : "<b>Tidak Lulus</b>";
   echo "Nilai Akademik :". $nilai . "<br>";
   echo "Nilai Atletik :". $nilaia . "<br>";
   echo "Ditanyakan :". $jawab;
    
?>