<?php

class produk
{
    public  $judul;
    public  $penulis;
    public  $penerbit;
    protected  $diskon = 0;
    private  $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }



    public function getharga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getlabel()
    {
        return "{$this->penulis} , {$this->penerbit}";
    }

    public function Getinfoproduk()
    {
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
        return $str;
    }
}


class komik extends produk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function Getinfoproduk()
    {
        $str = "Komik : " . parent::Getinfoproduk() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends produk
{
    public $waktumain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktumain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function Getinfoproduk()
    {
        $str = "Game : " . parent::Getinfoproduk() . " ~ {$this->waktumain} Jam.";
        return $str;
    }
}


class Cetakinfoproduk
{
    public function Cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getlabel()} (RP. {$produk->harga})";
        return $str;
    }
}

// Komik
$produk1 = new komik("Naruto", "Azriel", "Musashi", 40000, 100);
// game
$produk2 = new Game("Kokoci", "Mizuha", "Gramed", 800000, 90);
$produk3 = new Game("Assasint create", "Holo", "Hajaji", 4200000, 50);


echo $produk1->Getinfoproduk();
echo "<br>";
echo $produk3->Getinfoproduk();
echo "<hr>";

$produk3->setDiskon(50);
echo $produk3->getharga();
