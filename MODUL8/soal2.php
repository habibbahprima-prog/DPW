<?php
// =============================================
// SOAL CERITA 2 - Pecahan Uang Ani
// =============================================
$total   = 1387500;
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

echo "<h2>Pecahan Uang Ani dari Bank</h2>";
echo "<p>Total: Rp. " . number_format($total, 0, ',', '.') . ",-</p>";
echo "<hr>";

$sisa = $total;
foreach ($pecahan as $p) {
    $jumlah = (int)($sisa / $p);
    $sisa   = $sisa % $p;
    echo "<p>Pecahan Rp. "
         . number_format($p, 0, ',', '.')
         . " : <strong>$jumlah lembar</strong></p>";
}

echo "<hr>";

// =============================================
// SOAL 18 - Data Nilai Siswa
// =============================================
$siswa = [
    ["no"=>1, "poin"=>75, "nama"=>"Adi"],
    ["no"=>2, "poin"=>80, "nama"=>"Joni"],
    ["no"=>3, "poin"=>65, "nama"=>"Jihan"],
    ["no"=>4, "poin"=>70, "nama"=>"Aya"],
    ["no"=>5, "poin"=>85, "nama"=>"Ita"],
    ["no"=>6, "poin"=>90, "nama"=>"Budi"],
    ["no"=>7, "poin"=>95, "nama"=>"Tini"],
    ["no"=>8, "poin"=>65, "nama"=>"Sari"],
];

// a) Poin siswa nomor urut 5 (index ke-4)
echo "<h3>a) Poin siswa nomor urut 5:</h3>";
echo "<p>Nama: " . $siswa[4]['nama']
              . " | Poin: " . $siswa[4]['poin'] . "</p>";

// b) Siswa dengan poin 90
echo "<h3>b) Siswa dengan poin 90:</h3>";
$ada = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 90) {
        echo "<p>" . $s['nama'] . "</p>";
        $ada = true;
    }
}
if (!$ada) echo "<p>Tidak ada</p>";

// c) Siswa dengan poin 100
echo "<h3>c) Siswa dengan poin 100:</h3>";
$ada = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 100) {
        echo "<p>" . $s['nama'] . "</p>";
        $ada = true;
    }
}
if (!$ada) echo "<p>Tidak ada</p>";
?>