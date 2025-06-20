<?php
$host = "localhost";
$user = "root";
$pass = "123"; // Password kosong untuk Laragon default
$db = "pemograman_web_contoh";

// Tambahkan port jika perlu (default 3306)
$port = 3316; 

// Membuat koneksi dengan try-catch
    $conn = new mysqli($host, $user, $pass, $db, $port);
    
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

?>