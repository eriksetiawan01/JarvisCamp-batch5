<?php
$fruits = [1,2,3,5];
$fruits[0] = "Hijau";
$fruits[2] = "Hijau";
print_r($fruits);

echo "<br>";
// menghitung total data di array
echo count($fruits);
echo "<br>";

// menambahkan data di akhir array
array_push($fruits, "mangga", "apple");
print_r($fruits);
echo "<br>";

?>