<?php

require __DIR__ . '/../config/db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");

    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);
        
        if (password_verify($password, $data['password'])) {
            if ($data['role'] === 'admin') {
                header('Location: ../profile.php');
                exit();
            } else {
                echo "Selamat datang, " . htmlspecialchars($data['name']);
                exit();
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
