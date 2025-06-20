<?php 
include '../config/koneksi_db.php';

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if(!$result) {
    die("Query gagal: ".$conn->error);
}

$data = [];

while ($row = $result->fetch_assoc()){
    $data[] = $row;
}

foreach ($data as $row){
    echo "ID: ".htmlspecialchars($row['Judul'])."<br";
    echo "Judul: ".htmlspecialchars($row['Penulis'])."<br>";
    echo "Tahun Terbit: ".$row['Tahun_Terbit']. "<br>";
    echo "Harga: Rp".number_format($row['Harga'],2). "<br><hr>";
}

$conn->close();
?>