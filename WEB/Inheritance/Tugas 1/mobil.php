<?php
// Definisi kelas MobilLengkap
class MobilLengkap {
    public function nontonTV() {
        echo "TV dihidupkan, TV Mencari Chanel, TV Menampilkan gambar.\n";
    }
}

// Definisi kelas MobilBMW yang merupakan turunan dari MobilLengkap
class MobilBMW extends MobilLengkap {
    public function HidupkanMobil() {
        echo "Mobil BMW dihidupkan.\n";
    }

    public function MatikanMobil() {
        echo "Mobil BMW dimatikan.\n";
    }

    public function ubahGigi($gigi) {
        echo "Gigi diganti menjadi $gigi.\n";
    }
}

// Membuat objek MobilBMW
$bmw = new MobilBMW();

// Menggunakan metode dari MobilLengkap
$bmw->nontonTV();

// Menggunakan metode dari MobilBMW
$bmw->HidupkanMobil();
$bmw->MatikanMobil();
$bmw->ubahGigi(3);
?>


