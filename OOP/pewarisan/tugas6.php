<?php

class kendaraan {
    protected $platNomor;
    protected $kapasitas;
    protected $bahanBakar;

    public function __construct($platNomor, $kapasitas, $bahanBakar) {
        $this->platNomor = $platNomor;
        $this->kapasitas = $kapasitas;
        $this->bahanBakar= $bahanBakar;
    }
}

class mobil extends kendaraan {
    protected $jenisMobil;

    public function __construct($jenisMobil, $platNomor, $kapasitas, $bahanBakar) {
        parent::__construct($platNomor, $kapasitas, $bahanBakar);
        $this->jenisMobil = $jenisMobil;
    }

        public function infoKendaraan() { 
        return "Mobil tipe $this->jenisMobil Plat  $this->platNomor bisa nampung $this->kapasitas orang bahan bakar $this->bahanBakar. </br>";
    }

    public function infotambahan() {
        echo "Trivia: mobil bapaknya Tristan";
    }
}
class bus extends kendaraan {
    protected $jenisKursi;

    public function __construct($platNomor, $kapasitas, $jenisKursi, $bahanBakar) {
        parent::__construct($platNomor, $kapasitas, $bahanBakar);
        $this->jenisKursi = $jenisKursi;
    }

        public function infoKendaraan() { 
        return "Plat $this->platNomor bisa nampung $this->kapasitas jenis kursi $this->jenisKursi bahan bakar $this->bahanBakar. </br>";
    }

        public function infotambahan() {
        echo "Trivia: Bus Doubledecker berasal dari Perancis";
    }
}

$FREED = new mobil("MPV", "B 49AU MK", 7, "Besin");
echo $FREED->infoKendaraan();
echo $FREED->infotambahan();

echo "</br></br>";

$doubleDecker = new bus("E 216B TA", 50, 'High Deck', 'Solar');
echo $doubleDecker->infoKendaraan();
echo $doubleDecker->infotambahan();
?>