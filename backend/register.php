<?php
require __DIR__ . '/../config/db.php';

if (isset($_POST['submit'])) {

    global $db_connect;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    // Check if password and confirm password match
    if ($confirm != $password) {
        echo "Password tidak sesuai dengan konfirmasi password.";
        exit();
    }

    // Check if the email is already used
    $usedEmail = mysqli_query($db_connect, "SELECT email FROM users WHERE email = '$email'");
    if (mysqli_num_rows($usedEmail) > 0) {
        echo "Email sudah digunakan.";
        exit();
    }

    // Hash the password before storing it
    $password = password_hash($password, PASSWORD_DEFAULT);
    $created_at = date('Y-m-d H:i:s');  // Get current timestamp

    // Insert the new user into the database
    $users = mysqli_query($db_connect, "INSERT INTO users (name, email, password, created_at) VALUES ('$name', '$email', '$password', '$created_at')");

    // Check if the insertion was successful
    if ($users) {
        echo "Registrasi berhasil.";
    } else {
        echo "Terjadi kesalahan saat registrasi.";
    }
}
?>
