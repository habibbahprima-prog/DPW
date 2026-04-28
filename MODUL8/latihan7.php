<?php
$namaBuah = array("Nanas","Mangga","jeruk","Apel","Melon","Manggis");

echo "saya suka " . $namaBuah[0] . ", "
                  . $namaBuah[1] . " dan "
                  . $namaBuah[2] . ".";

echo "saya suka " . $namaBuah[1]; // Mangga
echo "saya suka " . $namaBuah[2]; // Jeruk
echo "saya suka " . $namaBuah[3]; // Apel
echo "saya suka " . $namaBuah[4]; // Melon

// array associative
$umur = array(
    "Andi" => "35 Tahun",
    "Ben"  => "37 Tahun",
    "Joe"  => "Tahun"
);
$umur['ahmad'] = "50 Tahun";

echo "Umur andi adalah " . $umur['Andi'];

// tampilkan semua umur
foreach ($umur as $nama => $nilai) {
    echo "Umur $nama adalah $nilai<br>";
}
?>