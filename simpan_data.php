<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
  } else {
    echo
