<?php
$nama_hewan = "Kucing Persia";
$berat_badan = 2.5;

if ($berat_badan < 3.0) {
    $status = "Kurang";
} elseif ($berat_badan >= 3.0 && $berat_badan <= 6.0) {
    $status = "Normal";
} else {
    $status = "Obesitas";
}

echo "Nama: " . $nama_hewan . ", Berat: " . $berat_badan . "kg, Status: " . $status;
echo "<br>";

$nama_hewan = "Anjing Ras";
$berat_badan = 5.0;

if ($berat_badan < 3.0) {
    $status = "Kurang";
} elseif ($berat_badan >= 3.0 && $berat_badan <= 6.0) {
    $status = "Normal";
} else {
    $status = "Obesitas";
}

echo "Nama: " . $nama_hewan . ", Berat: " . $berat_badan . "kg, Status: " . $status;
echo "<br>";

$nama_hewan = "Sapi Perah";
$berat_badan = 10.0;

if ($berat_badan < 3.0) {
    $status = "Kurang";
} elseif ($berat_badan >= 3.0 && $berat_badan <= 6.0) {
    $status = "Normal";
} else {
    $status = "Obesitas";
}

echo "Nama: " . $nama_hewan . ", Berat: " . $berat_badan . "kg, Status: " . $status;
?>
