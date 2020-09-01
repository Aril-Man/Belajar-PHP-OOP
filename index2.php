<?php 

class Produk{

    public $nama;
    private $NIS;
    public $namabarang;
    public $merk;
    public $harga;

    public function __construct($nama, $NIS, $namabarang, $merk, $harga) {
        
        $this->nama = $nama;
        $this->NIS = $NIS;
        $this->namabarang = $namabarang;
        $this->merk = $merk;
        $this->harga = $harga;

    }

    public function Setnama()
    {
        return "$this->nama";
    }

    public function Setnis()
    {
        return "$this->NIS";
    }

    public function Getlabel()
    {
        $str = "Nama : {$this->Setnama()} <br> NIS : {$this->Setnis()} <br> Nama Barang : {$this->namabarang} <br> Merk : {$this->merk} <br> Harga : {$this->harga}";
        return $str; 
    }
}

$produk1 = new Produk("Azriel Fauzi Hermansyah", 11907065, "Laptop", "ASUS", 12000000);
$produk2 = new Produk("Puja Maulida Herwanto" ,11906066, "Laptop", "HP", 8000000);
$produk3 = new Produk("Alfi Ilham", 11907077, "Handphone", "Samsung", 4000000);

// Cetak Hasil
echo $produk1->Getlabel();
echo "<hr>";
echo $produk2->Getlabel();
echo "<hr>";
echo $produk3->Getlabel();
echo "<hr>";


?>