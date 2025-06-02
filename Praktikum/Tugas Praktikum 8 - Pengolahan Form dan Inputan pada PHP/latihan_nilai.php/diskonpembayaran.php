<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>
    <h2>Form Pembayaran UKT Mahasiswa</h2>
    <form method="post" action="">
        <table>
            <tr>
                <td>NPM:</td>
                <td><input type="text" name="npm" required></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Prodi:</td>
                <td><input type="text" name="prodi" required></td>
            </tr>
            <tr>
                <td>Semester:</td>
                <td><input type="number" name="semester" min="1" max="14" required></td>
            </tr>
            <tr>
                <td>Biaya UKT (Rp):</td>
                <td><input type="number" name="biaya_ukt" min="0" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung Diskon"></td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = (int)$_POST['semester'];
        $biaya_ukt = (float)$_POST['biaya_ukt'];
        
        // Menghitung diskon
        $diskon = 0;
        if ($biaya_ukt >= 5000000) {
            $diskon = 10; // Diskon dasar 10%
            
            // Tambahan diskon 5% jika semester > 8
            if ($semester > 8) {
                $diskon += 5;
            }
        }
        
        // Menghitung total yang harus dibayar
        $total_diskon = ($diskon / 100) * $biaya_ukt;
        $total_bayar = $biaya_ukt - $total_diskon;
        
        // Format angka untuk tampilan
        function formatRupiah($angka) {
            return "Rp. " . number_format($angka, 0, ',', '.') . ",-";
        }
        
        // Menampilkan hasil
        echo "<h3>Detail Pembayaran</h3>";
        echo "NPM: " . $npm . "<br>";
        echo "NAMA: " . $nama . "<br>";
        echo "PRODI: " . $prodi . "<br>";
        echo "SEMESTER: " . $semester . "<br>";
        echo "BIAYA UKT: " . formatRupiah($biaya_ukt) . "<br>";
        echo "DISKON: " . $diskon . "%<br>";
        echo "YANG HARUS DIBAYAR: " . formatRupiah($total_bayar);
    }
    ?>
</body>
</html>