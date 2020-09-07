<?php
class produk{
	public $namamakanan,
		   $kategori,
		   $harga;
	public function getCetak(){
		return "$this->kategori, (Rp $this->harga)";
	}
	public function __construct($namamakanan="nama makanan",$kategori="kategori",$harga=0){
		$this->namamakanan = $namamakanan;
		$this->kategori = $kategori;
		$this->harga = $harga;
	}

}
	class cetakinfoproduk{
		public function cetakinfo(produk $produk){
			$str="{$produk->namamakanan}, {$produk->getCetak()}";
			return $str;
		}
	}
	$produk1= new produk("makanan khas betawi","soto",70000);
	$produk2= new produk("makanan khas jogja","gudeg",100000);
	$produk3= new produk("makanan khas madura","sate",25000);
	$produk4= new produk("makanan khas palembang","pempek",15000);
	$infoproduk = new cetakinfoproduk();

	echo "nama makanan: ". $produk1->getCetak();
	echo "<br>";
	echo "nama makanan: ". $produk2->getCetak();
	echo "<br>";
	echo "nama makanan: ". $produk3->getCetak();
	echo "<br>";
	echo "nama makanan: ". $produk4->getCetak();
	echo "<br>";
	echo $infoproduk->cetakinfo($produk2);
	
