<?php

require __DIR__ . '/../config/db.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan email
    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");

    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);
        
        // Verifikasi password
        if (password_verify($password, $data['password'])) {
            // Cek role pengguna
            if ($data['role'] === 'admin') {
                // Redirect ke halaman admin
                header('Location: ../profile.php');
                exit();
            } else {
                // Tampilkan pesan untuk user biasa
                echo "Selamat datang, " . htmlspecialchars($data['name']);
                exit(); // Hentikan eksekusi setelah pesan ditampilkan
            }
        } else {
            echo '<div class="alert alert-danger">Password salah!</div>';
            exit();
        }

    } else {
        echo '<div class="alert alert-danger">Email atau password salah!</div>';
        exit();
    }
}
?>
