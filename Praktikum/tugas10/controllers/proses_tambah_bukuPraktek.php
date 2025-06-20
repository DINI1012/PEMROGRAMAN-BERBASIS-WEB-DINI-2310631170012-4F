<?php 
include '../config/koneksi_db.php';

if($_SERVER['REQUESR_METHOD']=='POST'){
    $judul = $_POST['Judul'];
    $penulis = $_POST ['Penulis'];
    $tahun_terbit = $_POST['Tahun_Terbit'];
    $harga = $_POST['Harga'];
    $stok = $_POST['stok'];

    $stmt = $conn->prepare("INSERT INTO buku(Judul, Penulis, Tahun_Terbit, Harga, stok) VALUES (?,?,?,?,?)");

    $stmt->bind_param("ssiii", $judul, $penulis, $tahun_terbit, $harga, $stok);

    if ($stmt->execute()){
        $message = "Buku berhasil ditambahkan";
    }else{
        $message = "Error" .$stmt->error;
    }

}
?>