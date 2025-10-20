<?php

class PegawaiNegeri
{
    private $namaPegawai;
    private $alamat;
    private $noTelp;
    private $NIP;

    // method constructor
    public function __construct($nama, $alamat, $nomer, $noInduk)
    {
        $this->namaPegawai = $nama;
        $this->alamat = $alamat;
        $this->noTelp = $nomer;
        $this->NIP = $noInduk;
    }

    public function dataPegawaiInformasi()
    {
        echo '<h1>Data Pegawai Negeri Sipil (PNS)</h1>';
        echo "Nama pegawai : $this->namaPegawai </br>";
        echo "Alamat rumah : $this->alamat </br>";
        echo "No. Telepon  : $this->noTelp </br>";
        echo "NIP          : $this->NIP";
    }
}

$pegawai = new PegawaiNegeri('paor', 'jengki abadi jaya', '0812999999', '01122388');
$pegawai->dataPegawaiInformasi();