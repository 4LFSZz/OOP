<?php

    // property
    class dataPribadi {
        public $namaLengkap;
        public $alamat;
        public $umur;
        public $email;

    // method
        public function setName($namaLengkap) {
            $this->namaLengkap = $namaLengkap;
        }

        public function setAlamat($alamat) {
            $this->Alamat = $alamat;
        }

        public function setUmur($umur) {
            $this->Umur = $umur;
        }

        public function setEmail($email) {
            $this->Email = $email;
        }


        public function getName() {
            return $this->namaLengkap;
        }

        public function getAlamat() {
            return $this->Alamat;
        }

        public function getUmur() {
            return $this->Umur;
        }

        public function getEmail() {
            return $this->Email;
        } 
    }

    // instansi
    $dataPribadi = new dataPribadi();

    // set object
    $dataPribadi->setName('asdwa');
    $dataPribadi->setAlamat('halim');
    $dataPribadi->setUmur('69');
    $dataPribadi->setEmail('sadaw');

    echo $dataPribadi->getName() .'<br>';
    echo $dataPribadi->getAlamat();
    echo $dataPribadi->getUmur();
    echo $dataPribadi->getEmail();

?>