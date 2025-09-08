<?php

class lingkaran {

    public const PI = 3.14;

    public function luas($jari) {

        $hasiljari = $jari * $jari;
        echo  'hasil : ' . self::PI * $jari;
    }
}

$lingkaran = new lingkaran;
echo $lingkaran::PI. '<br>';
echo $lingkaran->luas(8);


?>