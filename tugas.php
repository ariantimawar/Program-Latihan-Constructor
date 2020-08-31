<?php
class produk{
    public $merk,
           $harga;

           public function getCetak(){
               return "$this->merk, $this->harga";
           }
           public function __construct($merk="merk", $harga="0"){
               $this->merk = $merk;
               $this->harga = $harga;
           }
}

$produk1 = new produk("Iphone 11", 14500000);
$produk2 = new produk("Samsung S20 Ultra", 18500000);
$produk3 = new produk("Oppo Reno 4", 4600000);
$produk4 = new produk("VIVO X50", 5000000);

echo "Jenis Handphone : " . $produk1->getCetak();
echo "<br>";
echo "<br>";
echo "Jenis Handphone : " . $produk2->getCetak();
echo "<br>";
echo "<br>";
echo "Jenis Handphone : " . $produk3->getCetak();
echo "<br>";
echo "<br>";
echo "Jenis Handphone : " . $produk4->getCetak();
?>