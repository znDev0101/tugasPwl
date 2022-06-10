<?php
$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'perpustakaan';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}
?>