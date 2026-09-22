<?php
// Fase 2: Data Layer - Menyimpan data komoditas produk

$products = [
    [
        "ID" => "P001",
        "Nama" => "Beras Pandan Wangi 5kg",
        "Kategori" => "Sembako",
        "Harga" => 75000,
        "Stok" => 15,
        "Deskripsi" => "Beras kualitas premium dengan aroma wangi"
    ],
    [
        "ID" => "P002",
        "Nama" => "Minyak Goreng Sawit 2L",
        "Kategori" => "Sembako",
        "Harga" => 35000,
        "Stok" => 2, // Sengaja diset < 3 (kritis) untuk pengujian
        "Deskripsi" => "Minyak goreng kelapa sawit murni"
    ],
    [
        "ID" => "P003",
        "Nama" => "Gula Pasir 1kg",
        "Kategori" => "Sembako",
        "Harga" => 16000,
        "Stok" => 20,
        "Deskripsi" => "Gula pasir tebu asli"
    ],
    [
        "ID" => "P004",
        "Nama" => "Garam Dapur 250g",
        "Kategori" => "Bumbu",
        "Harga" => 3000,
        "Stok" => 1, // Sengaja diset < 3 (kritis) untuk pengujian
        "Deskripsi" => "Garam beryodium halus"
    ],
    [
        "ID" => "P005",
        "Nama" => "Mie Instan Kuah",
        "Kategori" => "Makanan Siap Saji",
        "Harga" => 3500,
        "Stok" => 50,
        "Deskripsi" => "Mie instan rasa ayam bawang"
    ]
];
?>
