<?php
class handphone {
    public $nama;
    public $merek;
    public $harga;

    public function __construct($nama, $merek, $harga) {
        $this->nama = $nama;
        $this->merek = $merek;
        $this->harga = $harga;
    }
    public function getInfo() { 
        return "{$this->merek} {$this->nama} - Rp" . number_format($this->harga,0,",",".");
    }
}

class cart {
    private $items = [];
    public function tambahItem(handphone $hp) {
        $this->items[] = $hp;
    }

    public function tampilkanCart() { 
        foreach ($this->items as $item) {
            echo $item->getInfo() . "</br>";
        }
    }

    public function hitungTotal() {
        $total =  0;
        foreach ($this->items as $item) {
            $total += $item->harga;;
        }
    return $total;
    }
}

class transaksi {
    private $cart;

    public function __construct(cart $cart) {
        $this->cart = $cart;
    }

    public function checkOut() {
        echo "Daftar Belanja: </br></br>";
        $this->cart->tampilkanCart();
        echo "</br>";
        echo "Total Pembayaran: Rp" . number_format($this->cart->hitungTotal(),0,",",".") . "</br>";
        echo "Transaksi selesai. Terimakasih!";

    }
}

$hp1= new handphone("Galaxy S21", "Samsung", 12000000);
$hp2= new handphone("Iphone13","apple", 15000000 );
$hp3= new handphone("Iphone8" ,"apple", 8000000);
$hp4= new handphone("Redmi Note 8", "xiaomi", 18000000);
$hp5= new handphone("Galaxy Note 10", "samsung", 19000000);
$hp6= new handphone("Infonix Hot 8", "infinix", 13000000);

$cart= new cart();
$cart->tambahItem($hp1);
$cart->tambahItem($hp2);
$cart->tambahItem($hp3);
$cart->tambahItem($hp4);
$cart->tambahItem($hp5);
$cart->tambahItem($hp6);

$transaksi = new transaksi($cart);
$transaksi->checkOut();
?>