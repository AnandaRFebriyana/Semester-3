<?php
// Kelas dasar ItemProduk
class ItemProduk {
    protected $ukuran;
    protected $warna;
    protected $nama;

    public function Ukuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function Warna($warna) {
        $this->warna = $warna;
    }

    public function Nama($nama) {
        $this->nama = $nama;
    }
}

// Kelas Topi yang meng-extends ItemProduk
class Topi extends ItemProduk {
    protected $model;

    public function Model($model) {
        $this->model = $model;
    }
}

// Kelas Celana yang meng-extends ItemProduk
class Celana extends ItemProduk {
    protected $tipe;
    protected $model;

    public function Tipe($tipe) {
        $this->tipe = $tipe;
    }

    public function Model($model) {
        $this->model = $model;
    }
}

// Kelas Baju yang meng-extends ItemProduk
class Baju extends ItemProduk {
    protected $tipe;

    public function Tipe($tipe) {
        $this->tipe = $tipe;
    }
}

// Contoh penggunaan
$topi = new Topi();
$topi->Ukuran('M');
$topi->Warna('Merah');
$topi->Nama('Topi Keren');
$topi->Model('Snapback');

$celana = new Celana();
$celana->Ukuran('L');
$celana->Warna('Biru');
$celana->Nama('Celana Jeans');
$celana->Tipe('Pendek');
$celana->Model('Slim Fit');

$baju = new Baju();
$baju->Ukuran('XL');
$baju->Warna('Putih');
$baju->Nama('Kemeja');
$baju->Tipe('Lengan Panjang');

// Menampilkan informasi produk
echo "Informasi Topi:\n";
echo "Nama: " . $topi->nama . "\n";
echo "Ukuran: " . $topi->ukuran . "\n";
echo "Warna: " . $topi->warna . "\n";
echo "Model: " . $topi->model . "\n";

echo "\nInformasi Celana:\n";
echo "Nama: " . $celana->nama . "\n";
echo "Ukuran: " . $celana->ukuran . "\n";
echo "Warna: " . $celana->warna . "\n";
echo "Tipe: " . $celana->tipe . "\n";
echo "Model: " . $celana->model . "\n";

echo "\nInformasi Baju:\n";
echo "Nama: " . $baju->nama . "\n";
echo "Ukuran: " . $baju->ukuran . "\n";
echo "Warna: " . $baju->warna . "\n";
echo "Tipe: " . $baju->tipe . "\n";
?>
