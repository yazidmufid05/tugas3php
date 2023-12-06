<?php

// Membuat array multidimensi
$kendaraan = [
    "transportasi" => ["Mobil", "Sepeda", "Truk", "Motor", "Bus"],
    "mobil" => ["merk" => "Toyota", "type" => "Vios", "year" => 2016],
    "motor" => ["Honda", "Yamaha", "Suzuki"]
];

// Menampilkan output
echo "Ini Array Kendaraan: <br>";
echo "<pre>";
print_r($kendaraan["transportasi"]);
echo "</pre>";

echo "<br>Array Mobil: <br>";
echo "<pre>";
print_r($kendaraan["mobil"]);
echo "</pre>";

echo "<br>Array Motor: <br>";
echo "<pre>";
print_r($kendaraan["motor"]);
echo "</pre>";
?>
