<?php
// Fase 4: Presentation Layer - Merajut komponen dan merender tampilan

// 1. Memanggil Data Layer
require_once 'products.php';

// 2. Memanggil Processing Layer
require_once 'functions.php';

// 3. Menghitung Total Nilai Aset menggunakan fungsi dari Processing Layer
$total_aset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project 1: Product Information System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 30px;
            color: #333;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9em;
            letter-spacing: 0.5px;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        /* Logika Styling untuk Stok Kritis */
        .stok-kritis {
            background-color: #ffe6e6 !important; 
            color: #d32f2f;
        }
        .stok-kritis td {
            font-weight: 500;
        }
        .footer-tabel {
            font-weight: bold;
            background-color: #ecf0f1;
            text-align: right;
            font-size: 1.1em;
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <h2>Sistem Informasi Manajemen Produk</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                
                <?php 
                // Evaluasi kondisi: Jika stok < 3, berikan class 'stok-kritis'
                $row_class = "";
                if ($product['Stok'] < 3) {
                    $row_class = "stok-kritis";
                }
                ?>
                
                <tr class="<?= $row_class ?>">
                    <td><?= htmlspecialchars($product['ID']) ?></td>
                    <td><?= htmlspecialchars($product['Nama']) ?></td>
                    <td><?= htmlspecialchars($product['Kategori']) ?></td>
                    <td>Rp <?= number_format($product['Harga'], 0, ',', '.') ?></td>
                    <td><?= htmlspecialchars($product['Stok']) ?></td>
                    <td><?= htmlspecialchars($product['Deskripsi']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="footer-tabel">Total Keseluruhan Nilai Aset Gudang:</td>
                <td class="footer-tabel">Rp <?= number_format($total_aset, 0, ',', '.') ?></td>
            </tr>
        </tfoot>
    </table>

</body>
</html>
