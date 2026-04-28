<?php
$gaji_pokok  = 3250000;
$tunjangan   = 1200000;
$persen_pajak = 10 / 100;  // 10%

$gaji_kotor  = $gaji_pokok + $tunjangan;
$pajak       = $persen_pajak * $gaji_kotor;
$gaji_bersih = $gaji_kotor - $pajak;

echo "<h2>Penghitungan Gaji Bersih Obi</h2>";
echo "<p>Gaji Pokok        : Rp. "
     . number_format($gaji_pokok,  0, ',', '.') . ",-</p>";
echo "<p>Tunjangan Jabatan : Rp. "
     . number_format($tunjangan,   0, ',', '.') . ",-</p>";
echo "<p>Gaji Kotor        : Rp. "
     . number_format($gaji_kotor,  0, ',', '.') . ",-</p>";
echo "<p>Pajak (10%)       : Rp. "
     . number_format($pajak,       0, ',', '.') . ",-</p>";
echo "<hr>";
echo "<p><strong>Gaji Bersih : Rp. "
     . number_format($gaji_bersih, 0, ',', '.') . ",-</strong></p>";
?>

<!--
  Hasil:
  Gaji Kotor  = 3.250.000 + 1.200.000 = 4.450.000
  Pajak       = 10% x 4.450.000       =   445.000
  Gaji Bersih = 4.450.000 - 445.000   = 4.005.000
-->