<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login dan Register</title>
    <style>
        .form-container {
            display: none;
        }
        .active {
            display: block;
        }
    </style>
</head>
<body>
    <div id="loginForm" class="form-container active">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="paswd">Password:</label>
            <input type="password" id="paswd" name="paswd" required><br><br>
            <input type="submit" value="Login">
        </form>
        <p>Belum punya akun? <a href="#" onclick="showRegisterForm()">Daftar</a></p>
    </div>

    <div id="registerForm" class="form-container">
        <h2>Register</h2>
        <form action="register_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="paswd">Password:</label>
            <input type="password" id="paswd" name="paswd" required><br><br>
            <input type="submit" value="Register">
        </form>
        <p>Sudah punya akun? <a href="#" onclick="showLoginForm()">Login</a></p>
    </div>

    <script>
        function showRegisterForm() {
            document.getElementById('loginForm').classList.remove('active');
            document.getElementById('registerForm').classList.add('active');
        }

        function showLoginForm() {
            document.getElementById('registerForm').classList.remove('active');
            document.getElementById('loginForm').classList.add('active');
        }
    </script>
</body>
</html>
