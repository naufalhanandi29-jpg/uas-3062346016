# UAS Sistem Informasi Geografis (GIS)

## 📌 Informasi Umum

- **Nama Mahasiswa** : Muhammad Naufal Hanandi
- **NPM** : 3062346016
- **Program Studi** : Pendidikan Teknologi Informasi (PTI)
- **Mata Kuliah** : Sistem Informasi Geografis (GIS)
- **Tahun Akademik** : 2025/2026
- **Framework** : Laravel
- **Admin Panel** : Filament

---

## 🗺️ Deskripsi Project

Project ini merupakan aplikasi **Sistem Informasi Geografis (GIS) berbasis web** yang dikembangkan menggunakan framework Laravel dan Filament. Sistem ini merupakan pengembangan dari aplikasi web sebelumnya dengan penambahan fitur GIS berupa **penyimpanan koordinat lokasi (latitude dan longitude)** serta **visualisasi titik lokasi pada peta digital**.

Peta ditampilkan menggunakan **Leaflet.js** dengan sumber peta dari **OpenStreetMap**.

---

## ✨ Fitur Utama

- CRUD data pendaftaran
- Input data koordinat lokasi (Latitude & Longitude)
- Admin panel menggunakan Filament
- Visualisasi titik lokasi pada peta digital
- Marker lokasi berdasarkan data database
- Popup informasi pada setiap marker

---

## 🛠️ Teknologi yang Digunakan

- Laravel Framework
- Filament Admin Panel
- MySQL Database
- Leaflet.js
- OpenStreetMap
- PHP 8.x
- XAMPP

---

## 🗄️ Struktur Database

Tabel utama: **pendaftarans**

Field penting GIS:

- `latitude` (decimal)
- `longitude` (decimal)

---

## 🚀 Cara Menjalankan Project

1. Clone repository:

   ```bash
   git clone https://github.com/naufalhanandi29-jpg/uas-3062346016
   ```

2. Masuk ke folder project:

   ```bash
   cd uas-3062346016
   ```

3. Install dependency:

   ```bash
   composer install
   npm install
   npm run build
   ```

4. Copy file environment:

   ```bash
   cp .env.example .env
   ```

5. Atur koneksi database di file `.env`

6. Generate app key:

   ```bash
   php artisan key:generate
   ```

7. Jalankan migration:

   ```bash
   php artisan migrate
   ```

8. Jalankan server:

   ```bash
   php artisan serve
   ```

9. Akses admin panel:

   ```
   http://127.0.0.1:8000/admin
   ```

---

## 📍 Implementasi GIS

Implementasi GIS dilakukan dengan:

- Menyimpan data koordinat latitude dan longitude ke dalam database
- Menampilkan data tersebut pada peta digital menggunakan Leaflet
- Menampilkan marker lokasi berdasarkan data spasial

---

## 📸 Dokumentasi

Dokumentasi screenshot sistem disertakan pada laporan UAS GIS sesuai dengan ketentuan dosen.

---

## 📝 Catatan

Project ini dibuat untuk memenuhi tugas **Ujian Akhir Semester (UAS)** mata kuliah Sistem Informasi Geografis (GIS).

---

## 🔗 Repository

Repository ini merupakan versi terbaru yang telah ditambahkan fitur GIS sesuai dengan laporan UAS.

