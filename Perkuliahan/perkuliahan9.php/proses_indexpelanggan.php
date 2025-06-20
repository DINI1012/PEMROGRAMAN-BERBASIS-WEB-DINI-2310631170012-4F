<?php
   include 'koneksi_db.php'; // Koneksi database


   // Inisialisasi variabel pencarian
   $search_judul = isset($_GET['nama']) ? $_GET['nama'] : '';
   $search_tahun = isset($_GET['telepon']) ? $_GET['telepon'] : '';

   // Query untuk menampilkan daftar pelanggan dengan filter pencarian
   $query = "SELECT * FROM pelanggan WHERE 1=1";
   if (!empty($search_judul)) {
       $query .= " AND Nama LIKE '%" . $conn->real_escape_string($search_judul) . "%'";
   }
   if (!empty($search_tahun)) {
       $query .= " AND Alamat = " . $conn->real_escape_string($search_tahun);
   }


   $result = $conn->query($query);
?>
