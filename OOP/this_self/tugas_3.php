<?php 

class PersegiPanjang
{
    private $panjang;
    private $lebar;
    public static $luas;
    public static $keliling;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function luasPersegiPanjang()
    {
        self::$luas = $this->panjang * $this->lebar;
        self::$keliling = (2 * $this->panjang) + (2 * $this->lebar);

        echo 'Luas persegi panjang ' . PersegiPanjang::$luas . ' cm </br>';
        echo 'Lebar persegi panjang ' . PersegiPanjang::$keliling . ' cm </br>';
    }
}

$persegiPanjang = new PersegiPanjang(12, 5);
$persegiPanjang->luasPersegiPanjang();

?>