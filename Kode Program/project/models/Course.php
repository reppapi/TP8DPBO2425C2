<?php
include_once 'config/DB.php'; // Koneksi database dari class DB

class Course extends DB {

    public function getAll() {
        // Ambil semua matkul + nama dosen (join untuk tampil di tabel)
        $sql = "SELECT courses.*, lecturers.name as lecturer_name 
                FROM courses 
                LEFT JOIN lecturers ON courses.lecturer_id = lecturers.id";

        $result = $this->conn->query($sql);
        $rows = [];

        // Loop hasil query ke array
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getById($id) {
        // Ambil satu matkul berdasarkan ID
        $result = $this->conn->query("SELECT * FROM courses WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function create($data) {
        // Ambil data dari form
        $name = $data['course_name'];
        $credits = $data['credits'];
        $lecturer_id = $data['lecturer_id'];

        // Insert data baru ke tabel course
        return $this->conn->query(
            "INSERT INTO courses (course_name, credits, lecturer_id) 
             VALUES ('$name', '$credits', '$lecturer_id')"
        );
    }

    public function update($id, $data) {
        // Ambil data hasil edit
        $name = $data['course_name'];
        $credits = $data['credits'];
        $lecturer_id = $data['lecturer_id'];

        // Update matkul berdasarkan ID
        return $this->conn->query(
            "UPDATE courses 
             SET course_name='$name', credits='$credits', lecturer_id='$lecturer_id' 
             WHERE id=$id"
        );
    }

    public function delete($id) {
        // Hapus matkul berdasarkan ID
        return $this->conn->query("DELETE FROM courses WHERE id=$id");
    }
}
?>
