<?php
include 'koneksi_db.php';
include 'nav.php';

// Proses penghapusan jika ada parameter ID di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Pelanggan berhasil dihapus'); window.location.href='hapuspelanggan.php';</script>";
        exit;
    } else {
        echo "<div class='alert alert-danger'>Gagal menghapus pelanggan</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Hapus Pelanggan</title>
</head>
<body>
<div class="container mt-4">
    <h2>Daftar Pelanggan</h2>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM pelanggan ORDER BY ID ASC");
        while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= htmlspecialchars($row['Nama']) ?></td>
                <td><?= htmlspecialchars($row['Alamat']) ?></td>
                <td><?= htmlspecialchars($row['Email']) ?></td>
                <td><?= $row['Telepon'] ?></td>
                <td>
                    <a href="hapuspelanggan.php?id=<?= $row['ID'] ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
