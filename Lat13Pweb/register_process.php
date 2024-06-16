<?php
include("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['paswd'])) {
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = md5(sha1($_POST['paswd']));

        // Check if username already exists
        $check = $k->query("SELECT * FROM users WHERE username='$username'");

        if ($check->num_rows == 0) {
            $sql = "INSERT INTO users (username, nama, email, paswd, active) VALUES ('$username', '$nama', '$email', '$password', 1)";

            if ($k->query($sql) === TRUE) {
                echo "Registrasi berhasil. <a href='index.php'>Login di sini</a>";
            } else {
                echo "Error: " . $sql . "<br>" . $k->error;
            }
        } else {
            echo "Username sudah ada. <a href='index.php' onclick='showRegisterForm()'>Coba lagi</a>";
        }
    } else {
        echo "Form tidak lengkap. <a href='index.php' onclick='showRegisterForm()'>Coba lagi</a>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
