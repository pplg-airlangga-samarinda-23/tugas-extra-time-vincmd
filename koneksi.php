<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    echo "koneksi gagal:    ";
}
