<?php require 'backend/create.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="text-primary">Tambah Produk</h1>
            <a href="/teoripemweb/pertemuan-6/show.php" class="btn btn-secondary mt-2">Lihat Data Produk</a>
        </div>

        <!-- Form Tambah Produk -->
        <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
            <form action="backend/create.php" method="post" enctype="multipart/form-data">
                <!-- Input Nama Produk -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Input nama produk" required>
                </div>

                <!-- Input Harga Produk -->
                <div class="mb-3">
                    <label for="price" class="form-label">Harga Produk</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Input harga produk" required>
                </div>

                <!-- Input Gambar Produk -->
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Produk</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <!-- Tombol Simpan -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Link ke Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
