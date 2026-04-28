<?php
$x = 5;
$y = 10;

// Arithmetic operators
echo "Penambahan "   . ($x + $y)  . "<br>";
echo "Pengurangan "  . ($x - $y)  . "<br>";
echo "Perkalian "    . ($x * $y)  . "<br>";
echo "Pembagian "    . ($x / $y)  . "<br>";
echo "Modulus "      . ($x % $y)  . "<br>";
echo "Exponensial "  . ($x ** $y) . "<br>";
echo "<br>";

// Assignment operators
$x += 2;   // $x = $x + 2  => 7
$y *= 2;   // $y = $y * 2  => 20
echo "Penambahan x " . $x . "<br>";
echo "Perkalian y "  . $y . "<br>";
echo "<br>";

// Increment / Decrement
echo "Isi ++x = " . (++$x) . "<br>"; // pre-increment  => tampil 8
echo "Isi x++ = " . ($x++) . "<br>"; // post-increment => tampil 8, lalu x=9
echo "Isi x = "   . $x     . "<br>"; // 9
echo "<br>";

echo "Isi --y = " . (--$y) . "<br>"; // pre-decrement  => tampil 19
echo "Isi y-- = " . ($y--) . "<br>"; // post-decrement => tampil 19, lalu y=18
echo "Isi y = "   . $y     . "<br>"; // 18
echo "<br>";

// Conditional assignment
$user   = "Andi darmawan";
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status . "<br>";

echo $color = $color ?? "red"; // null coalescing
?>

<!--
  Perbedaan $x++ dan ++$x:
  - $x++ (post-increment): nilai dipakai DULU, kemudian +1
  - ++$x (pre-increment) : +1 DULU, kemudian nilai dipakai
-->