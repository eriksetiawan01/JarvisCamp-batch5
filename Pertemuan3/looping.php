<?php
for ($i = 1; $i < 10; $i++) {
    echo "$i ";
}
echo "<br>";


$a = 1;
while ($a <= 10) {
    echo "$a ";
    $a++;
}
echo "<br>";


$b = 0;
do {
    $b++;
    echo "$b ";
} while ($b <= 10);
echo "<br>";

$array = ["wafi", "wafa", "wifi"];

foreach ($array as $key => $value) {
    $no = $key + 1;
    echo $no. " - $value <br>";
}
?>