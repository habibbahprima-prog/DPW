<?php
$nilai = 85; // ganti nilai ini untuk mencoba

echo "<h2>Konversi Nilai</h2>";
echo "<p>Nilai Angka: $nilai</p>";

if ($nilai >= 90 && $nilai <= 100) {
    $huruf = "A";
} elseif ($nilai >= 80) {
    $huruf = "AB";
} elseif ($nilai >= 70) {
    $huruf = "B";
} elseif ($nilai >= 60) {
    $huruf = "BC";
} elseif ($nilai >= 0) {
    $huruf = "C";
} else {
    $huruf = "Nilai tidak valid";
}

echo "<p><strong>Nilai Huruf: $huruf</strong></p>";
?>