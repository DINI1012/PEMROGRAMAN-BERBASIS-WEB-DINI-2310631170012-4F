<?php
include 'koneksi_db.php';
include 'nav.php';

// Proses penghapusan jika ada parameter ID di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM buku WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Buku berhasil dihapus'); window.location.href='hapus.php';</script>";
        exit;
    } else {
        echo "<div class='alert alert-danger'>Gagal menghapus buku</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Hapus Buku</title>
</head>
<body>
<div class="container mt-4">
    <h2>Daftar Buku</h2>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM buku ORDER BY ID ASC");
        while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= htmlspecialchars($row['Judul']) ?></td>
                <td><?= htmlspecialchars($row['Penulis']) ?></td>
                <td><?= $row['Tahun_terbit'] ?></td>
                <td><?= $row['Harga'] ?></td>
                <td><?= $row['Stok'] ?></td>
                <td><?= htmlspecialchars($row['Kategori']) ?></td>
                <td>
                    <a href="hapus.php?id=<?= $row['ID'] ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
