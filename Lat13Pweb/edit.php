<?php
include("dbconnect.php");

$id = $_GET['urut'];
$rs = $k->query("SELECT * FROM users WHERE id=$id");
$data = $rs->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5(sha1($_POST['paswd']));

    $sql = "UPDATE users SET username='$username', nama='$nama', email='$email', paswd='$password' WHERE id=$id";

    if($k->query($sql) === TRUE) {
        header("Location: main.php");
    } else {
        echo "Error: " . $sql . "<br>" . $k->error;
    }
}
?>

<form action="" method="post">
    <input type="text" name="username" value="<?php echo $data['username'] ?>" required placeholder="Username">
    <input type="text" name="nama" value="<?php echo $data['nama'] ?>" required placeholder="Nama Lengkap">
    <input type="email" name="email" value="<?php echo $data['email'] ?>" required placeholder="Email">
    <input type="password" name="paswd" required placeholder="Password">
    <input type="submit" value="Update">
</form>
