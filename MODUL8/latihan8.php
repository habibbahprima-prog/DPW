<?php
// array 2 dimensi
$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "1D" => array("lukman", "fajri", "mahmud")
);

print_r($array);           // tampilkan semua
print_r($array['1D']);     // tampilkan kelas 1D
echo $array['1D'][0];      // lukman
echo $array['1D'][1];      // fajri  (tampilkan fajri)
echo $array['1C'][2];      // adi    (tampilkan adi)

// notasi singkat []
$array_simple = [
    "1C" => ["udin", "ismail", "adi"],
    "1D" => ["lukman", "fajri", "mahmud"]
];
?>