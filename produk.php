<?php

class produk {
    public  $judul= "judul"; 
    public  $penulis = "penulis";
    public  $penerbit = "penerbit"; 
    public  $harga = 0;

     public function getlabel(){
        return " $this->judul, $this->penulis , $this->penerbit, $this->harga";
     }
}

// Buku
$produk1 = new produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Azriel";
$produk1->penerbit = "Hermansyah";
$produk1->harga = 30000000;

// $produk2 = new produk();
// $produk2->judul = "Gajah";
// $produk2->penulis = "Raihan";
// $produk2->penerbit = "gramed";
// var_dump($produk2);



// game

$produk3 = new produk();
$produk3->judul = "Hatisima";
$produk3->penulis = "popkorn";
$produk3->penerbit = "Jujub";
$produk3->harga = 40000000;

echo "Komik : ". $produk1->getlabel();
echo "<br>"; 
echo "Game : " . $produk3->getlabel();