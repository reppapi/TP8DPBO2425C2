<?php
include_once 'config/DB.php'; // Import class DB untuk koneksi database

class Lecturer extends DB {

    public function getAll() {
        // Ambil semua data dosen
        $result = $this->conn->query("SELECT * FROM lecturers");
        $rows = [];

        // Ubah hasil query jadi array
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getById($id) {
        // Ambil satu data dosen berdasarkan ID
        $result = $this->conn->query("SELECT * FROM lecturers WHERE id = $id");
        return $result->fetch_assoc();
    }

    public function create($data) {
        // Ambil nilai dari form
        $name = $data['name'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        // Insert data dosen baru
        return $this->conn->query(
            "INSERT INTO lecturers (name, nidn, phone, join_date) 
             VALUES ('$name', '$nidn', '$phone', '$join_date')"
        );
    }

    public function update($id, $data) {
        // Ambil data hasil edit
        $name = $data['name'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        // Update data dosen berdasarkan ID
        return $this->conn->query(
            "UPDATE lecturers 
             SET name='$name', nidn='$nidn', phone='$phone', join_date='$join_date' 
             WHERE id=$id"
        );
    }

    public function delete($id) {
        // Hapus dosen berdasarkan ID
        return $this->conn->query("DELETE FROM lecturers WHERE id=$id");
    }
}
?>
