<?php
// File: switch.php
include 'header.php'; // Memasukkan navigasi
?>

<h2>Menentukan Jenis Kendaraan Berdasarkan Jumlah Roda</h2>
<form method="POST">
    Masukkan jumlah roda: <input type="number" name="roda" required>
    <input type="submit" value="Cek">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlahRoda = $_POST['roda'];

    switch ($jumlahRoda) {
        case 1:
            echo "Kendaraan ini adalah Unicycle (Sepeda Roda Satu).";
            break;
        case 2:
            echo "Kendaraan ini adalah Sepeda Motor.";
            break;
        case 3:
            echo "Kendaraan ini adalah Becak atau Bajaj.";
            break;
        case 4:
            echo "Kendaraan ini adalah Mobil.";
            break;
        case 6:
            echo "Kendaraan ini adalah Truk.";
            break;
        default:
            echo "Jumlah roda tidak dikenali sebagai jenis kendaraan umum.";
    }
}
?>
</body>
</html>