<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="assets/bootstrap.min.css" rel="stylesheet">
  <title>Edit Matkul</title>
</head>
<body>
  <div class="container mt-5">
    <div class="col-lg-6 m-auto">

        <!-- Form untuk update data matkul -->
        <form method="post" action="index.php?mod=course&action=edit&id=<?= $data['id'] ?>">
            <div class="card">

                <!-- Header card -->
                <div class="card-header bg-warning text-center">
                    <h3>Edit Mata Kuliah</h3>
                </div>

                <div class="card-body">

                    <!-- Hidden ID (opsional tergantung kebutuhan controller) -->
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    
                    <!-- Input nama matkul -->
                    <label>Nama Mata Kuliah:</label>
                    <input 
                        type="text" 
                        name="course_name" 
                        value="<?= $data['course_name'] ?>" 
                        class="form-control" 
                        required
                    > 
                    <br>

                    <!-- Input SKS -->
                    <label>SKS:</label>
                    <input 
                        type="number" 
                        name="credits" 
                        value="<?= $data['credits'] ?>" 
                        class="form-control" 
                        required
                    > 
                    <br>

                    <!-- Pilihan dosen pengajar -->
                    <label>Dosen Pengajar:</label>
                    <select name="lecturer_id" class="form-select" required>
                        <option value="">-- Pilih Dosen --</option>

                        <!-- Looping dosen, otomatis memilih dosen yang sedang dipakai -->
                        <?php foreach ($lecturers as $lec): ?>
                            <option 
                                value="<?= $lec['id'] ?>" 
                                <?= ($lec['id'] == $data['lecturer_id']) ? 'selected' : '' ?>
                            >
                                <?= $lec['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select> 
                    <br>

                    <!-- Tombol update dan batal -->
                    <button class="btn btn-success" type="submit">Update</button>
                    <a class="btn btn-secondary" href="index.php?mod=course">Batal</a>
                </div>

            </div>
        </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
