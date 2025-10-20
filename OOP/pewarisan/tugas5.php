<?php
class warungKopi {
    protected $nama;
    protected $lokasi;
    
    public function __construct($nama, $lokasi) {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
    }
    public function infoWarung() {
        return "Warung Kopi '{$this->nama}' berlokasi di {$this->lokasi}. </br>";
    }

    public function menuUtama() {
        return "Menu utama: Kopi hitam dana teh manis. </br>";
    }
}

class warungKopiModern extends warungKopi {
    private $wifi;

    public function __construct($nama, $lokasi, $wifi) {
        parent::__construct($nama, $lokasi);
        $this->wifi = $wifi;
    }

    public function fasilitasWarung() {
        return $this->wifi ? "Tersedia Wifi gratis." : "Tidak ada wifi. </br>";
}

public function menuUtama() {
        return "Menu utama: Espresso, Latte, dan Cappacino. </br>";
    }
}

class warungKopiTradisonal extends warungKopi {
    public function menuUtama() {
        return "Menu utama: Kopi tubruk dan Gorengan. </br>";
}

public function suasanaWarung() {
        return "Suasana santai dengan kursi kayu dan obrolan hangat. </br>";
    }
}

$modern = new warungKopiModern("Kopi kekinian", "jakarta", true);
$tradisional = new warungKopiTradisonal("Kopi kampung", "Yogyakarta");

echo $modern->infoWarung();
echo $modern->menuUtama();
echo $modern->fasilitasWarung();

echo "</br></br>";

echo $tradisional->infoWarung();
echo $tradisional->menuUtama();
echo $tradisional->suasanaWarung();
?>