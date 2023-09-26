<?php
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    protected function getInfo() {
        return "Merk: {$this->merk}, Camera: {$this->camera}, Memory: {$this->memory} GB";
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beliHandphone() {
        return "Beli Handphone {$this->handphone_baru}.";
    }

    public function getInfoFromTablet() {
        return "Informasi Tablet: " . parent::getInfo();
    }
}

$tablet = new Tablet("Samsung", "12 MP", 64);
$handphone = new Handphone("Apple", "16 MP", 128, "iPhone 13");

// Tidak dapat mengakses $tablet->merk, $tablet->camera, atau $tablet->memory
echo $handphone->getInfoFromTablet() . "\n"; // Mengakses melalui metode yang ditentukan
echo $handphone->beliHandphone() . "\n";
?>
