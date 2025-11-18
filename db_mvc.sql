-- 1. Buat Database (Jika belum ada)
CREATE DATABASE IF NOT EXISTS tp_mvc25;
USE tp_mvc25;

-- 2. Tabel Lecturers (Dosen)
CREATE TABLE IF NOT EXISTS lecturers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    nidn VARCHAR(20) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    join_date DATE NOT NULL
);

-- 3. Tabel Courses (Mata Kuliah)
CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL,
    credits INT NOT NULL,
    lecturer_id INT,
    FOREIGN KEY (lecturer_id) REFERENCES lecturers(id) ON DELETE SET NULL
);

-- Dummy data dosen
INSERT INTO lecturers (name, nidn, phone, join_date) VALUES 
('Bernard Adam Kurniawan', '12345678', '08123456789', '2020-01-01'),
('Jasper Raharja', '87654321', '08987654321', '2019-05-20'),
('Elanor Riana', '11223344', '081299887766', '2021-08-15'),
('Dr. Stephen Strange', '99887766', '085712345678', '2018-03-10'),
('Wanda Marguerite', '55443322', '087811223344', '2022-11-01');

-- Dummy data matkul
INSERT INTO courses (course_name, credits, lecturer_id) VALUES 
('Pemrograman Web', 3, 1),          -- Diajar oleh Bernard
('Algoritma dan Pemrograman', 4, 2),-- Diajar oleh Jasper
('Struktur Data', 4, 2),            -- Diajar oleh Jasper
('Basis Data', 3, 3),               -- Diajar oleh Elanor
('Kecerdasan Buatan', 3, 4),        -- Diajar oleh Dr. Strange
('Jaringan Komputer', 3, 1),        -- Diajar oleh Bernard
('Sistem Operasi', 3, 5);           -- Diajar oleh Wanda