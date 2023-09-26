<?php
class Mamalia {
    protected $nama;
    protected $berat;

    public function __construct($nama, $berat) {
        $this->nama = $nama;
        $this->berat = $berat;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getBerat() {
        return $this->berat;
    }
}

class Kucing extends Mamalia {
    public function __construct($nama, $berat) {
        parent::__construct($nama, $berat);
    }
}

class Anjing extends Mamalia {
    public function __construct($nama, $berat) {
        parent::__construct($nama, $berat);
    }
}

class Sapi extends Mamalia {
    public function __construct($nama, $berat) {
        parent::__construct($nama, $berat);
    }
}

$kucing = new Kucing("Kucing Anggora", 1.5);
$anjing = new Anjing("Anjing Ras", 5);
$sapi = new Sapi("Sapi Perah", 10);    

$hewan = [$kucing, $anjing, $sapi];

//percabangan
foreach ($hewan as $h) {
    echo "Nama: " . $h->getNama() . "\n";
    echo "Berat: " . $h->getBerat() . " kg\n";

    if ($h->getBerat() < 3) {
        echo "Status: Kurang\n";
    } elseif ($h->getBerat() >= 4 && $h->getBerat() <= 6) {
        echo "Status: Normal\n";
    } else {
        echo "Status: Obesitas\n";
    }

    echo "\n";

}

// Loop berdasarkan berat hewan
foreach ($hewan as $h) {
    if ($h->getBerat() < 3) {
        echo $h->getNama() . " adalah hewan yang kurang berat badan.\n";
    } elseif ($h->getBerat() >= 4 && $h->getBerat() <= 6) {
        echo $h->getNama() . " adalah hewan dengan berat badan normal.\n";
    } else {
        echo $h->getNama() . " adalah hewan dengan kelebihan berat badan (obesitas).\n";
    }
}

//perulangan

?>
