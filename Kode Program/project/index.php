<?php

// Mengambil nilai parameter 'mod', 'action', dan 'id' dari URL.
// Jika tidak ada, diberikan nilai default.
$mod = isset($_GET['mod']) ? $_GET['mod'] : 'lecturer';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Menentukan controller yang digunakan berdasarkan nilai 'mod'
if ($mod == 'lecturer') {

    // Memanggil controller untuk data dosen
    include_once 'controllers/LecturerController.php';
    $controller = new LecturerController();

} elseif ($mod == 'course') {

    // Memanggil controller untuk data mata kuliah
    include_once 'controllers/CourseController.php';
    $controller = new CourseController();

} else {

    // Jika 'mod' tidak dikenali, kembalikan ke controller default (lecturer)
    include_once 'controllers/LecturerController.php';
    $controller = new LecturerController();
}

// Mengecek apakah method sesuai 'action' tersedia di controller
if (method_exists($controller, $action)) {

    // Jika parameter id ada, method dipanggil dengan parameter id
    if ($id) {
        $controller->$action($id);

    // Jika tidak ada id, method dipanggil tanpa parameter
    } else {
        $controller->$action();
    }

} else {

    // Jika method tidak ditemukan, arahkan ke method index
    $controller->index();
}

?>
