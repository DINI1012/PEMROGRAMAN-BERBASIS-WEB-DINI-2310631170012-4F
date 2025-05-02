<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
    <style>
        .container {
            border: 1px solid black;
            padding: 20px;
            width: 400px;
            margin: 50px auto;
        }
        h2 {
            font-weight: bold;
        }
        hr {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
    <hr>

    <?php
    // Data barang disimpan dalam array
    $barang = [
        "nama" => "Keyboard",
        "harga" => 150000
    ];

    // Jumlah beli (bisa diubah)
    $jumlahBeli = 2;

    // Pajak sebagai konstanta
    define("PAJAK", 0.10);

    // Hitung total sebelum pajak
    $totalSebelumPajak = $barang["harga"] * $jumlahBeli;

    // Hitung pajak
    $pajak = $totalSebelumPajak * PAJAK;

    // Hitung total akhir
    $totalBayar = $totalSebelumPajak + $pajak;

    // Format rupiah
    function formatRupiah($angka) {
        return "Rp " . number_format($angka, 0, ',', '.');
    }

    echo "Nama Barang: " . $barang["nama"] . "<br>";
    echo "Harga Satuan: " . formatRupiah($barang["harga"]) . "<br>";
    echo "Jumlah Beli: " . $jumlahBeli . "<br>";
    echo "Total Harga (Sebelum Pajak): " . formatRupiah($totalSebelumPajak) . "<br>";
    echo "Pajak (10%): " . formatRupiah($pajak) . "<br>";
    echo "<strong>Total Bayar: " . formatRupiah($totalBayar) . "</strong>";
    ?>
</div>

</body>
</html>
