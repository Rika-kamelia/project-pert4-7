<?php
require __DIR__ . '/../config/db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database for the user with the provided email
    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");

    // If the user exists in the database
    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);
        
        // Verify the password with the hashed one in the database
        if (password_verify($password, $data['password'])) {
            // Check user role and redirect accordingly
            if ($data['role'] === 'admin') {
                header('Location: ../profile.php');
                exit();
            } else {
                echo "Selamat datang, " . htmlspecialchars($data['name']);
                exit();
            }
        } else {
            // If password is incorrect
            echo '<div class="alert alert-danger">Password salah!</div>';
            exit();
        }
    } else {
        // If email does not exist in the database
        echo '<div class="alert alert-danger">Email atau password salah!</div>';
        exit();
    }
}
?>

