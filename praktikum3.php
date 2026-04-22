<?php

class Produk {
    public static $jumlahProduk = 0;

    public static function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {
    // Final method tidak bisa di-override oleh class turunan
    final public static function prosesTransaksi($produk, $jumlahBeli) {
        echo "Transaksi diproses";
    }
}

$p1 = new Produk();
$p1->tambahProduk();
echo "Total Produk: " . Produk::$jumlahProduk;
?>