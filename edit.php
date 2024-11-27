<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Ambil data produk berdasarkan ID
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Jika ingin mengubah gambar juga

    // Update data produk
    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    // Redirect ke halaman data produk
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
            <h3 class="text-center text-primary mb-4">Edit Produk</h3>
            <form method="post">
                <!-- Input Nama Produk -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $row['name']; ?>" required>
                </div>
                <!-- Input Harga -->
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $row['price']; ?>" required>
                </div>
                <!-- Input Gambar -->
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar URL</label>
                    <input type="text" class="form-control" id="image" name="image" value="<?= $row['image']; ?>">
                </div>
                <!-- Tombol Submit -->
                <div class="d-grid">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>
            <div class="text-center mt-3">
                <a href="show.php" class="btn btn-secondary">Kembali ke Data Produk</a>
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
