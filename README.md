# TP8DPBO2425C2

## Janji

Saya **Repa Pitriani** dengan NIM **2402499** mengerjakan Tugas Praktikum 8 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Struktur Folder

```
├── Folder Dokumentasi/
│
├── Project/
│   ├── assets/ (Bootstrap & JS)
│   │
│   ├── config/
│   │   └── DB.php
│   │
│   ├── controllers/
│   │   ├── LecturerController.php
│   │   └── CourseController.php
│   │
│   ├── models/
│   │   ├── Lecturer.php
│   │   └── Course.php
│   │
│   ├── views/
│   │   ├── lecturer/
│   │   │   ├── create.php
│   │   │   ├── edit.php
│   │   │   └── index.php
│   │   └── course/
│   │       ├── create.php
│   │       ├── edit.php
│   │       └── index.php
│   │
│   └── index.php
│
├── tp_mvc25.sql
└── README.md
```

## Penjelasan Arsitektur MVC

Proyek ini memisahkan logika program menjadi tiga komponen utama:

### 1. Models (Pengelola Data)
Bagian ini bertugas mengelola interaksi langsung dengan database (Query SQL).

- **config/DB.php**: Class induk yang menangani koneksi ke database `tp_mvc25`.  
- **models/Lecturer.php**: Menangani CRUD untuk tabel dosen.  
- **models/Course.php**: Menangani CRUD untuk tabel mata kuliah. Termasuk query `LEFT JOIN lecturers` untuk menampilkan nama dosen pada tabel mata kuliah.

### 2. Views (Antarmuka Pengguna)
Bagian ini hanya berisi kode HTML dan sedikit PHP untuk menampilkan data. Tidak ada query database langsung di sini.

- **views/lecturer/**: Menampilkan tabel data dosen, form tambah, dan form edit.  
- **views/course/**: Menampilkan tabel mata kuliah dan form input. Dropdown dosen diambil langsung dari controller.

### 3. Controllers (Pengatur Alur)
Bagian ini menghubungkan Model dan View serta menangani logika bisnis.

- **controllers/LecturerController.php**: Mengatur alur data dosen.  
- **controllers/CourseController.php**: Mengatur alur data mata kuliah, termasuk memanggil `LecturerModel` untuk mengisi dropdown dosen pada halaman tambah/edit.

## Fitur Utama

- **Struktur MVC**: Kode lebih bersih dan terstruktur sesuai standar industri.  
- **Manajemen Dosen (CRUD)**:  
  - Menampilkan daftar dosen  
  - Menambah, mengubah, dan menghapus data dosen  
- **Manajemen Mata Kuliah (CRUD & Relasi)**:  
  - Menampilkan daftar mata kuliah beserta Nama Dosen Pengajar  
  - Dynamic Dropdown: Pilihan dosen diambil langsung dari database  
- **Desain Responsif**: Menggunakan Bootstrap 5 untuk tampilan yang rapi dan modern

## Dokumentasi

Klik thumbnail di bawah untuk menonton demo program:  

[![Demo Program](https://img.youtube.com/vi/hq6BUdu09t4/0.jpg)](https://youtu.be/hq6BUdu09t4)

