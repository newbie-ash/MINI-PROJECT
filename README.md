# Mini Project 1: Product Information System

Tugas Mini Project 1. Proyek ini berfokus pada perancangan dan implementasi dasar sistem informasi manajemen produk menggunakan PHP murni dengan pendekatan *Layered Architecture* (Arsitektur Berlapis).

## Deskripsi Proyek
Proyek ini dibuat untuk mempraktikkan pemisahan tanggung jawab kode (*Separation of Concerns*) dengan membaginya ke dalam 3 komponen utama:
1. **Data Layer (`products.php`)**: Penyimpanan data statis komoditas produk dalam bentuk *multidimensional array*.
2. **Processing Layer (`functions.php`)**: Menangani logika bisnis, termasuk kalkulasi total nilai aset gudang dan penentuan status stok kritis (di bawah 3).
3. **Presentation Layer (`index.php`)**: Merender (menampilkan) data ke dalam antarmuka pengguna berupa layout Tabel HTML.

## Dokumen Blueprint (Perancangan)
Perancangan konseptual, struktur data, diagram alur sistem, serta fase-fase pengerjaan telah didokumentasikan dengan rapi. Ini merupakan cetak biru (blueprint) yang dijadikan acuan sebelum menulis kode program.

Silakan baca dokumen perancangannya di sini:
**[1. PRD dan Blueprint Perencanaan Umum](PRD.md)**
**[2. Processing Flowchart (Diagram Alur Logika)](Processing_Flowchart.md)**

## Cara Menjalankan Aplikasi (Nanti Setelah Koding Selesai)
1. Pastikan Anda memiliki PHP yang terinstal di komputer.
2. Buka terminal/command prompt dan arahkan ke folder proyek ini.
3. Jalankan *local server* bawaan PHP dengan perintah:
   ```bash
   php -S localhost:8000
   ```
4. Buka browser dan akses `http://localhost:8000`.
