<?php 

class buku {
    public $judulBuku;
    public $namaPenulis;

    public function __construct($judul, $penulis)
    {
        $this -> judulBuku = $judul;
        $this -> namaPenulis = $penulis;

    }
    public function  tampilKanInformasi() {
        echo "Judul: $this->judulBuku<br>";
        echo "Penulis: $this->namaPenulis<br>";
    }
}

$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005, "Jakarta");
$buku2 = new Buku("Negeri 5 Menara", "Ahman Fuadi", 2009, "Jakarta");

$buku1->tampilKanInformasi();
echo "<hr>";
$buku2->tampilKanInformasi();
echo "<hr>";

?>