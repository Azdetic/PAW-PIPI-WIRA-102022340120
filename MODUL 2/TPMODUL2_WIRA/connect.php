<?php
// ==================1==================
// Define variables to connect to the database
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "tp2wad_wirar";

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
// Define $conn to connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>