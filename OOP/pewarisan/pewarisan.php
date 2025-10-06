<?php
class Hewan {
    private $namaHewan;
    private $jenis;

    public function setInformasiHewan($namaHewan, $jenis) {
        $this->namaHewan = $namaHewan;
        $this->jenis = $jenis;
    }

    public function getInformasiHewan() {
        return $this->namaHewan . ' ' . $this->jenis . '</br>';

    }
}

class keterunanHewanPertama extends Hewan {
}
class keterunanHewanKedua extends Hewan {
}
class keterunanHewanKetiga extends Hewan {
}

$hewan = new keterunanHewanPertama;
$hewan->setInformasiHewan('Harimau', 'kanivora');
echo $hewan->getInformasiHewan();

$hewan = new keterunanHewanPertama;
$hewan->setInformasiHewan('kambing', 'herbivora');
echo $hewan->getInformasiHewan();

$hewan = new keterunanHewanPertama;
$hewan->setInformasiHewan('orang utan', 'omnivora');
echo $hewan->getInformasiHewan();

?>