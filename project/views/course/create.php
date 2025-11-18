<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Load Bootstrap CSS -->
  <link href="assets/bootstrap.min.css" rel="stylesheet">
  <title>Tambah Matkul</title>
</head>
<body>
  <div class="container mt-5">
    <div class="col-lg-6 m-auto">
        <!-- Form submit ke controller Course (action=add) -->
        <form method="post" action="index.php?mod=course&action=add">
            <div class="card">
                <!-- Header form -->
                <div class="card-header bg-primary text-white text-center">
                    <h3>Tambah Mata Kuliah</h3>
                </div>

                <div class="card-body">
                    <!-- Input nama matkul -->
                    <label>Nama Mata Kuliah:</label>
                    <input type="text" name="course_name" class="form-control" required> <br>
                    
                    <!-- Input jumlah SKS -->
                    <label>SKS:</label>
                    <input type="number" name="credits" class="form-control" required> <br>
                    
                    <!-- Dropdown daftar dosen -->
                    <label>Dosen Pengajar:</label>
                    <select name="lecturer_id" class="form-select" required>
                        <option value="">-- Pilih Dosen --</option>
                        <!-- Loop untuk tampilkan semua dosen -->
                        <?php foreach ($lecturers as $lec): ?>
                            <option value="<?= $lec['id'] ?>"><?= $lec['name'] ?></option>
                        <?php endforeach; ?>
                    </select> <br>

                    <!-- Tombol simpan dan batal -->
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <a class="btn btn-secondary" href="index.php?mod=course">Batal</a>
                </div>
            </div>
        </form>
    </div>
  </div>

  <!-- Load Bootstrap JS -->
  <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
