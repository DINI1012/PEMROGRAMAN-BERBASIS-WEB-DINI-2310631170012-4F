<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Predikat Nilai</title>
</head>
<body>
    <h2>Form Input Nilai Mahasiswa</h2>
    <form method="post" action="">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nilai:</td>
                <td><input type="number" name="nilai"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Proses"></td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        
        // Menentukan predikat dengan alur yang diminta
        if ($nilai >= 85) {
            $predikat = "A";
            $status = "Lulus";
        } elseif ($nilai >= 75) {
            $predikat = "B";
            $status = "Lulus";
        } elseif ($nilai >= 65) {
            $predikat = "C";
            $status = "Lulus";
        } elseif ($nilai >= 50) {
            $predikat = "D";
            $status = "Tidak Lulus";
        } elseif ($nilai >= 0) {
            $predikat = "E";
            $status = "Tidak Lulus";
        } else {
            $predikat = "Tidak valid";
            $status = "Tidak valid";
        }
        
        // Menampilkan hasil dengan format yang diminta
        echo "<h3>Hasil Penilaian</h3>";
        echo "Nama : " . $nama;
        echo "<br/>";
        echo "Nilai : " . $nilai;
        echo "<br/>";
        echo "Predikat : " . $predikat;
        echo "<br/>";
        echo "Status : " . $status;
    }
    ?>
</body>
</html>