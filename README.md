# TP8DPBO2425C2

## Janji

Saya **Repa Pitriani** dengan NIM **2402499** mengerjakan Tugas Praktikum 8 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahan-Nya, maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Sistem Akademik – Simple University Management with MVC

**Sistem Akademik** adalah proyek berbasis **PHP Native** yang berfungsi untuk mengelola data perkuliahan, meliputi data Dosen dan Mata Kuliah.

Website ini dibuat dengan konsep **Object-Oriented Programming (OOP)** dan menerapkan pola arsitektur **Model-View-Controller (MVC)** agar struktur kodenya lebih rapi, terorganisir, dan mudah dikembangkan.

Dengan website ini, pengguna dapat melakukan operasi CRUD (Create, Read, Update, Delete) pada data dosen dan mata kuliah. Sistem ini juga menerapkan **relasi antar tabel**, di mana satu mata kuliah dapat memiliki satu dosen pengajar yang dipilih dari database.

Semua data tersimpan secara terstruktur di database **MySQL**.

## Struktur Folder

```
├── Folder Dokumentasi/
│   ├── screenshot_home.png
│   └── screen_record.mp4
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
├── │tp_mvc25.sql
└── README.md
```

