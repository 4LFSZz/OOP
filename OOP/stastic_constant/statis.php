<?php 

class singa {

    public static $kaki = 4;

    // public static function lari() {
    //     echo ' singa di hutan itu berlari';
    // }

    public function kaki1() {

        echo singa::$kaki;
    }
    public function kaki2() {

        echo static::$kaki;
    }
    public function kaki3() {

        echo self::$kaki;
    }
}

$hewan = new singa();
$hewan->kaki1();
$hewan->kaki2();
$hewan->kaki3();

// echo singa::$kaki;
// echo singa::lari();
?>