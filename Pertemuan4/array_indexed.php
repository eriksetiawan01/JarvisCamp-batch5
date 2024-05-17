<?php
$array = [1,2,3,4,5];

echo $array[1];
echo "<br><pre>";
print_r($array);
echo "</pre>"; // tambahkan titik-koma di sini

// Array assosiatif
$umur = ["erik" => 11, "alex" => 14];
$umur['mamat'] = 20;
$umur['mumun'] = 21;
echo "<br><pre>";
print_r($umur);
echo"</pre>";

foreach ($umur as $nama => $umur) { // ubah $umur menjadi $nama di sini
    echo "Namanya : $nama <br> Umurnya : $umur ";
}

// array multidimensi
$buahBuahan = [
    ["nama" => "Apel", "warna" => "merah"],
    ["nama" => "Mangga", "warna" => "hijau"],
    ["nama" => "Pisang", "warna" => "kuning"],
    ["nama" => "Durian", "warna" => "kuning"],
    ["nama" => "Kesemek", "warna" => "jingga"],
];

echo "<br><pre>"; // tambahkan titik-koma di sini
print_r($buahBuahan); // tambahkan print_r di sini
echo "</pre>"; // tambahkan titik-koma di sini
?>

<table border = 2>
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php foreach ($buahBuahan as $buah ) { ?>
    <tr>
        <td><?php echo $buah['nama'] ?></td>
        <td><?php echo $buah['warna'] ?></td>
    </tr>
    <?php } ?>
</table>
