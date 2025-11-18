<?php
include_once 'models/Course.php';
include_once 'models/Lecturer.php'; // Model dosen dipakai buat dropdown pengajar

class CourseController {
    private $model;   // Model untuk data course
    private $lecturerModel; // Model untuk data dosen (relasi ke course)

    public function __construct() {
        // Inisialisasi model
        $this->model = new Course();
        $this->lecturerModel = new Lecturer();
    }

    public function index() {
        // Ambil semua course untuk ditampilkan di halaman utama
        $courses = $this->model->getAll();
        include 'views/course/index.php';
    }

    public function add() {
        // Jika form disubmit
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Simpan data baru
            $this->model->create($_POST);
            header("Location: index.php?mod=course");
        } else {
            // Ambil daftar dosen untuk dropdown di form tambah data
            $lecturers = $this->lecturerModel->getAll();
            include 'views/course/create.php';
        }
    }

    public function edit($id) {
        // Jika form update disubmit
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Update course berdasarkan ID
            $this->model->update($id, $_POST);
            header("Location: index.php?mod=course");
        } else {
            // Ambil data course yang mau diedit
            $data = $this->model->getById($id);
            // Ambil daftar dosen buat dropdown
            $lecturers = $this->lecturerModel->getAll();
            include 'views/course/edit.php';
        }
    }

    public function delete($id) {
        // Hapus data course berdasarkan ID
        $this->model->delete($id);
        header("Location: index.php?mod=course");
    }
}
?>
