<?php
class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getInfo() {
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
}

$tablet = new Tablet("Samsung", "12 MP", 64);
$handphone = new Handphone("Apple", "16 MP", 128, "iPhone 13");

echo "Informasi Tablet: " . $tablet->getInfo() . "\n";
echo "Informasi Handphone: " . $handphone->getInfo() . "\n";
echo $handphone->beliHandphone() . "\n";
?>
