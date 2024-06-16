<?php
include("dbconnect.php");

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5(sha1($_POST['paswd']));

$sql = "INSERT INTO users (username, nama, email, paswd, active) VALUES ('$username', '$nama', '$email', '$password', 1)";

if($k->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
    header("Location: main.php");
} else {
    echo "Error: " . $sql . "<br>" . $k->error;
}
?>
