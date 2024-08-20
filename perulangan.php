<?php
$awal = 1; // Batas awal
$akhir = 101; // Batas akhir

echo "Angka ganjil antara $awal dan $akhir:<br>";
for ($i = $awal; $i <= $akhir; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}
