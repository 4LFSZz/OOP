<?php

class Kendaraan
{
    public $kendaraan = 'Bus Double Decker';
    public $roda = 10;

    public function informasiKendaraan()
    {
        echo 'Kendaraan berjeniskan ' . $this->kendaraan . '</br>';
        echo 'Jumlah rodanya itu ' . $this->roda;
    }
}

$kendaraanUmum = new Kendaraan();
echo $kendaraanUmum->informasiKendaraan();
// echo PHP_EOL;