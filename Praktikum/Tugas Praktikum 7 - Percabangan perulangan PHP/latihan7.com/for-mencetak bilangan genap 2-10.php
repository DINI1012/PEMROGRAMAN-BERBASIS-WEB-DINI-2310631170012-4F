<?php
// File: for.php
include 'header.php'; // Memasukkan navigasi
?>

<h2>Mencetak Bilangan Genap</h2>
<form method="POST">
    Masukkan batas atas (minimal 2): <input type="number" name="batas" min="2" required>
    <input type="submit" value="Cetak">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $batas = $_POST['batas'];
    echo "Bilangan genap dari 2 sampai $batas:<br>";
    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . "<br>";
    }
}
?>
</body>
</html>