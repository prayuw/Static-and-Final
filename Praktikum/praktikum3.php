<?php

class Produk {
    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        self::tambahProduk();
    }

    public static function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {
    // Final method tidak bisa di-override oleh class turunan
    final public static function prosesTransaksi($produk, $jumlahBeli) {
        $total = $produk->harga * $jumlahBeli;
        echo "--- Struk Transaksi --- <br>";
        echo "Membeli: " . $produk->nama . "<br>";
        echo "Harga Satuan: Rp" . number_format($produk->harga, 0, ',', '.') . "<br>";
        echo "Jumlah: $jumlahBeli <br>";
        echo "Total Bayar: Rp" . number_format($total, 0, ',', '.') . "<br>";
        echo "----------------------- <br><br>";
    }
}

// 1. Buat minimal 3 produk
$p1 = new Produk("Laptop ASUS", 8500000);
$p2 = new Produk("Mouse Logi", 250000);
$p3 = new Produk("Keyboard Mech", 750000);

// 2. Tampilkan total produk yang terdaftar
echo "Total jenis produk di sistem: " . Produk::$jumlahProduk . " jenis.<br><br>";

// 3. Simulasi Transaksi
Transaksi::prosesTransaksi($p1, 1); // Beli 1 laptop
Transaksi::prosesTransaksi($p2, 2); // Beli 2 mouse

?>