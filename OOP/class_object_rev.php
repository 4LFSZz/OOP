<?php

    // property
    class dataPribadi {
        public $namaLengkap;
        public $alamat;
        public $umur;
        public $email;

    // method
        public function setDataPribadi($namaLengkap, $alamat, $umur, $email) {
            $this->namaLengkap = $namaLengkap;
            $this->Alamat = $alamat;
            $this->Umur = $umur;
            $this->Email = $email;
        }

        public function getDataPribadi() {
            return 'nama saya' . $this->namaLengkap . ', alamat di' . $this->Alamat . ', umur ' . $this->Umur . ' email' . $this->Email;
        }
    }

    // instansi
    $dataPribadi = new dataPribadi();

    // set object
    $dataPribadi->setDataPribadi(' najwan', ' makassar', 69, ' www.hendralusmana');
    echo $dataPribadi->getDataPribadi();

?>