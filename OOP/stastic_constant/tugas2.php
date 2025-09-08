<?php

class PerangkatKelas {

    public $nama_perangkat;
    private $merek_perangkat;

    protected $jumlah;

    public function setDataPerangkat($nama_perangkat, $merek_perangkat, $jumlah) {
        $this->nama_perangkat = $nama_perangkat;
        $this->merek_perangkat = $merek_perangkat;
        $this->jumlah = $jumlah;
    }

            public function getDataPerangkat() {
            return 'dapet ' . $this->nama_perangkat . ' merek ' . $this->merek_perangkat  . $this->jumlah . ' biji';       
        }
}

$hasil_thrift = new PerangkatKelas();
// $hasil_thrift->nama_perangkat;
// $hasil_thrift->merek_perangkat;
// $hasil_thrift->jumlah;
$hasil_thrift->setDataPerangkat('motherboard', 'gigabyte ', 2);
echo $hasil_thrift->getDataPerangkat();
?>