<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "akademik";

  $koneksi = new mysqli($servername, $username, $password, $db);

  if ($koneksi->connect_error) {
    die("connection failed: " . $koneksi->connect_error);
  }
?>