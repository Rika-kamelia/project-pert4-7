<?php 
    if(isset($_POST['email']) || isset($_POST['password']) ) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'admin@admin.com' && $password == 'admin') {
            header('Location: ./../dashboard.php');
        } else {
            // Menampilkan pesan error dengan alert dari Bootstrap
            echo '
                <div class="alert alert-danger mt-3" role="alert">
                    <strong>Error!</strong> Email atau password salah.
                </div>
            ';
        }
    }
?>
