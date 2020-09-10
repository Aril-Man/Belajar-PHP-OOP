<?php

class Produk
{

    public $merk;
    public $tipe;
    public $harga;

    public function __construct($merk, $tipe, $harga)
    {
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->harga = $harga;
    }

    public function Getlabel()
    {
        return "Tipe : {$this->tipe} | RP.{$this->harga}";
    }

    public function Cetak(Produk $produk)
    {
        $str  = "{$produk->merk} | {$produk->Getlabel()}";
        return $str;
    }
}

class TV extends Produk
{
    public function Getinfoproduk()
    {
        $str = "TV : {$this->merk} | {$this->Getlabel()}";
        return $str;
    }
}

class Camera extends Produk
{
    public function Getinfoaksesoris()
    {
        return "Camera : {$this->merk} | {$this->Getlabel()}";
    }
}

// Produk
$produk1 = new TV("LG", "TP 2000", 12000000);
$produk2 = new TV("Samsung", "RT200", 40000000);
// Aksesoris
$aksesoris1 = new Camera("Canon", "X50B", 1223000);

// cetak Produk
echo $produk1->Getinfoproduk();
echo "<br>";
echo $produk2->Getinfoproduk();
echo "<hr>";
// Cetak Aksesoris
echo $aksesoris1->Getinfoaksesoris();
