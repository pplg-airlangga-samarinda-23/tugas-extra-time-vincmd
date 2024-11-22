<?php
session_start();
include "koneksi1.php";
$username = $_POST['username'];
$password = ($_POST['password']);
$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit;
} else {
    echo "Username atau password salah!";
}
