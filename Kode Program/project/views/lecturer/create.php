<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Load CSS Bootstrap -->
  <link href="assets/bootstrap.min.css" rel="stylesheet">

  <title>Tambah Dosen</title>
</head>
<body>
  <div class="container mt-5">
    <div class="col-lg-6 m-auto">

        <!-- Form untuk tambah dosen -->
        <form method="post" action="index.php?mod=lecturer&action=add">
            <div class="card">

                <!-- Header form -->
                <div class="card-header bg-primary text-white text-center">
                    <h3>Tambah Dosen</h3>
                </div>

                <!-- Body form -->
                <div class="card-body">

                    <!-- Input nama dosen -->
                    <label>Nama:</label>
                    <input type="text" name="name" class="form-control" required> 
                    <br>

                    <!-- Input NIDN -->
                    <label>NIDN:</label>
                    <input type="text" name="nidn" class="form-control" required> 
                    <br>

                    <!-- Input nomor telepon -->
                    <label>Telepon:</label>
                    <input type="text" name="phone" class="form-control" required> 
                    <br>

                    <!-- Input tanggal bergabung -->
                    <label>Tanggal Gabung:</label>
                    <input type="date" name="join_date" class="form-control" required> 
                    <br>

                    <!-- Tombol submit & batal -->
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <a class="btn btn-secondary" href="index.php?mod=lecturer">Batal</a>
                </div>
            </div>
        </form>

    </div>
  </div>

  <!-- Load JS Bootstrap -->
  <script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>
