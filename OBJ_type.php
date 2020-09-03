<?php

class produk
{
    public  $judul;
    public  $penulis;
    public  $penerbit;
    public  $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel()
    {
        return "$this->penulis , $this->penerbit";
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
$produk1 = new produk("Naruto", "Azriel", "Musashi", 40000);
$produk2 = new produk("Haji Gratis", "Raihan", "KOKO", 600000);
// game
$produk4 = new produk("Assasint create", "Holo", "Hajaji", 4200000);
$produk5 = new produk("Hallo Neigboor", "Kakohu", "WEBpopo", 5200000);

$infoproduk1 = new Cetakinfoproduk();
echo "<br>";
echo $infoproduk1->cetak($produk1);

$infoproduk2 = new Cetakinfoproduk();
echo "<br>";
echo $infoproduk2->cetak($produk2);

$infoproduk4 = new Cetakinfoproduk();
echo "<br>";
echo $infoproduk4->Cetak($produk4);

$infoproduk5 = new Cetakinfoproduk();
echo "<br>";
echo $infoproduk5->Cetak($produk5);
