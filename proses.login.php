<?php
include 'index.php';

$username = $_POST['username'];
$password = ($_POST['password']);

$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
$result = $login->query($query);

if ($result->num_rows > 0) {
    echo "Login berhasil! Selamat datang, " . $username;
    header("Location: dashboard.php");
} else {
    echo "Username atau password salah!";
}

$login->close();
