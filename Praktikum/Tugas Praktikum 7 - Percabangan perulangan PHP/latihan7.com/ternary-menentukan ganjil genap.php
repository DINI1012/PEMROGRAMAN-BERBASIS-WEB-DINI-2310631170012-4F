<?php
// File: ternary.php
include 'header.php'; // Memasukkan navigasi
?>

<h2>Menentukan Bilangan Genap atau Ganjil</h2>
<form method="POST">
    Masukkan angka: <input type="number" name="angka" required>
    <input type="submit" value="Cek">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];
    $status = ($angka % 2 == 0) ? "genap" : "ganjil";
    echo "Angka $angka adalah bilangan $status.";
}
?>
</body>
</html>