<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Pemanggilan file CSS Bootstrap -->
  <link href="assets/bootstrap.min.css" rel="stylesheet">

  <title>Edit Dosen</title>
</head>
<body>
  <div class="container mt-5">
    <div class="col-lg-6 m-auto">
      
      <!-- Form untuk proses update data dosen -->
      <!-- Data dikirim ke controller dengan action "edit" dan parameter id -->
      <form method="post" action="index.php?mod=lecturer&action=edit&id=<?= $data['id'] ?>">

        <div class="card">
          <div class="card-header bg-warning text-center">
            <!-- Header kartu -->
            <h3>Edit Dosen</h3>
          </div>

          <div class="card-body">

            <!-- Hidden input untuk memastikan ID tetap terkirim walaupun URL bermasalah -->
            <input type="hidden" name="id" value="<?= $data['id'] ?>">

            <!-- Input nama dosen -->
            <label>Nama:</label>
            <input 
              type="text" 
              name="name" 
              value="<?= $data['name'] ?>" 
              class="form-control" 
              required
            > 
            <br>

            <!-- Input NIDN dosen -->
            <label>NIDN:</label>
            <input 
              type="text" 
              name="nidn" 
              value="<?= $data['nidn'] ?>" 
              class="form-control" 
              required
            > 
            <br>

            <!-- Input nomor telepon dosen -->
            <label>Telepon:</label>
            <input 
              type="text" 
              name="phone" 
              value="<?= $data['phone'] ?>" 
              class="form-control" 
              required
            > 
            <br>

            <!-- Input tanggal bergabung -->
            <label>Tanggal Gabung:</label>
            <input 
              type="date" 
              name="join_date" 
              value="<?= $data['join_date'] ?>" 
              class="form-control" 
              required
            > 
            <br>

            <!-- Tombol untuk mengirim perubahan -->
            <button class="btn btn-success" type="submit">Update</button>

            <!-- Tombol untuk kembali ke halaman data dosen tanpa menyimpan perubahan -->
            <a class="btn btn-secondary" href="index.php?mod=lecturer">Batal</a>

          </div>
        </div>

      </form>
    </div>
  </div>

  <!-- File JavaScript Bootstrap -->
  <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
