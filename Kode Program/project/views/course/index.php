<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Load Bootstrap CSS -->
  <link href="assets/bootstrap.min.css" rel="stylesheet">
  <title>Courses</title>
</head>
<body>

  <!-- Navbar utama -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- Judul sistem -->
      <a class="navbar-brand" href="index.php">Akademik</a>

      <!-- Menu navigasi -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <!-- Link ke data dosen -->
          <li class="nav-item"><a class="nav-link" href="index.php?mod=lecturer">Dosen</a></li>

          <!-- Link aktif untuk halaman matkul -->
          <li class="nav-item"><a class="nav-link active" href="index.php?mod=course">Matkul</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten utama -->
  <div class="container my-4">
    <h3>Data Mata Kuliah</h3>

    <!-- Tombol untuk tambah matkul -->
    <a class="btn btn-primary mb-3" href="index.php?mod=course&action=add">Tambah Baru</a>

    <!-- Tabel daftar matkul -->
    <table class="table table-striped">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nama Matkul</th>
            <th>SKS</th>
            <th>Dosen Pengajar</th>
            <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <!-- Loop semua matkul dari controller -->
        <?php foreach ($courses as $row): ?>
        <tr>
            <!-- ID matkul -->
            <td><?= $row['id'] ?></td>

            <!-- Nama matkul -->
            <td><?= $row['course_name'] ?></td>

            <!-- Jumlah SKS -->
            <td><?= $row['credits'] ?></td>

            <!-- Nama dosen (fallback "-" kalau NULL) -->
            <td><?= $row['lecturer_name'] ? $row['lecturer_name'] : '-' ?></td>

            <!-- Tombol aksi edit & delete -->
            <td>
                <a class="btn btn-sm btn-warning" 
                   href="index.php?mod=course&action=edit&id=<?= $row['id'] ?>">
                   Edit
                </a>

                <a class="btn btn-sm btn-danger" 
                   href="index.php?mod=course&action=delete&id=<?= $row['id'] ?>" 
                   onclick="return confirm('Yakin hapus?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS -->
  <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
