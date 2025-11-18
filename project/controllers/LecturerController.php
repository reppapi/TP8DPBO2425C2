<?php
include_once 'models/Lecturer.php'; // Import model dosen, dipakai untuk operasi CRUD

class LecturerController {
    private $model; // Menampung instance model Lecturer

    public function __construct() {
        // Inisialisasi model saat controller dibuat
        $this->model = new Lecturer();
    }

    public function index() {
        // Ambil semua data dosen untuk ditampilkan di halaman utama
        $lecturers = $this->model->getAll();
        include 'views/lecturer/index.php';
    }

    public function add() {
        // Jika form submit (POST)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Simpan data dosen baru
            $this->model->create($_POST);
            header("Location: index.php?mod=lecturer"); // Redirect ke halaman daftar dosen
        } else {
            // Menampilkan halaman form tambah dosen
            include 'views/lecturer/create.php';
        }
    }

    public function edit($id) {
        // Jika form update disubmit
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Update data dosen sesuai ID
            $this->model->update($id, $_POST);
            header("Location: index.php?mod=lecturer");
        } else {
            // Ambil data dosen berdasarkan ID untuk ditampilkan dalam form edit
            $data = $this->model->getById($id);
            include 'views/lecturer/edit.php';
        }
    }

    public function delete($id) {
        // Hapus dosen berdasarkan ID
        $this->model->delete($id);
        header("Location: index.php?mod=lecturer");
    }
}
?>
