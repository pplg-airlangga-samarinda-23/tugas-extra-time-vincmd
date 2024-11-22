<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "barang";

$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    die("koneksi gagal: " . $connection->connect_error);
}
