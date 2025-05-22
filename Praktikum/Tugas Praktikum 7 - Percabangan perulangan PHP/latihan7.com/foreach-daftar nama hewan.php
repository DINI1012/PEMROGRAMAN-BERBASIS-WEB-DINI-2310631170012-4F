<?php
// File: foreach.php
include 'header.php'; // Memasukkan navigasi
?>

<h2>Daftar Hewan</h2>
<form method="POST">
    Masukkan nama hewan (pisahkan dengan koma): <input type="text" name="hewan" placeholder="Contoh: Kucing, Anjing" required>
    <input type="submit" value="Tampilkan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputHewan = $_POST['hewan'];
    $hewan = explode(", ", $inputHewan); // Memisahkan string menjadi array

    echo "Daftar hewan:<br>";
    foreach ($hewan as $namaHewan) {
        echo "- " . trim($namaHewan) . "<br>"; // trim() untuk menghapus spasi berlebih
    }
}
?>
</body>
</html>