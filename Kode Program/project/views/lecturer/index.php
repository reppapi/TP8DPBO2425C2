<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Pemanggilan file CSS Bootstrap untuk styling -->
  <link href="assets/bootstrap.min.css" rel="stylesheet">

  <title>Lecturers</title>
</head>
<body>

  <!-- Navigasi utama aplikasi -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

      <!-- Logo / nama aplikasi -->
      <a class="navbar-brand" href="index.php">Akademik</a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <!-- Menu untuk halaman dosen (aktif) -->
          <li class="nav-item">
            <a class="nav-link active" href="index.php?mod=lecturer">Dosen</a>
          </li>

          <!-- Menu untuk halaman mata kuliah -->
          <li class="nav-item">
            <a class="nav-link" href="index.php?mod=course">Matkul</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-4">

    <!-- Judul halaman -->
    <h3>Data Dosen</h3>

    <!-- Tombol untuk menuju form penambahan data baru -->
    <a class="btn btn-primary mb-3" href="index.php?mod=lecturer&action=add">Tambah Baru</a>

    <!-- Tabel daftar dosen -->
    <table class="table table-striped">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Telepon</th>
            <th>Tgl Gabung</th>
            <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <!-- Perulangan untuk menampilkan setiap data dosen -->
        <?php foreach ($lecturers as $row): ?>
        <tr>
            <!-- Kolom informasi dosen -->
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['nidn'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['join_date'] ?></td>

            <!-- Kolom aksi edit dan hapus -->
            <td>
                <!-- Menuju halaman edit -->
                <a class="btn btn-sm btn-warning" 
                   href="index.php?mod=lecturer&action=edit&id=<?= $row['id'] ?>">
                    Edit
                </a>

                <!-- Hapus data dengan konfirmasi -->
                <a class="btn btn-sm btn-danger" 
                   href="index.php?mod=lecturer&action=delete&id=<?= $row['id'] ?>"
                   onclick="return confirm('Yakin hapus?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>

  <!-- File JS Bootstrap -->
  <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
