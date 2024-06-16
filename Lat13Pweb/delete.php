<?php
include("dbconnect.php");

$id = $_GET['urut'];
$sql = "DELETE FROM users WHERE id=$id";

if($k->query($sql) === TRUE) {
    header("Location: main.php");
} else {
    echo "Error: " . $sql . "<br>" . $k->error;
}
?>
