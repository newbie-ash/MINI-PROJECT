<?php
// Fase 3: Processing Layer - Logika Bisnis

/**
 * Fungsi untuk mengalkulasi total nilai aset gudang
 * @param array $products Array multidimensi berisi data produk
 * @return int Total nilai keseluruhan aset
 */
function hitungTotalNilaiStok($products) {
    $total_aset = 0;
    foreach ($products as $product) {
        $total_aset += ($product['Harga'] * $product['Stok']);
    }
    return $total_aset;
}
?>
