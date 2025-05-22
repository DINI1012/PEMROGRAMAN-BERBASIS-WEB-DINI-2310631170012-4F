<?php
$hari = "Senin";
switch($hari){
    case "Senin":
        echo "Hari pertama kerja ";
        break;
    case "Jum'at":
        echo "Solat jumaat!";
        break;
    case "Minggu":
        echo "Libur akhir pekan!";
        break;
        default:
        echo "Hari biasa";
}

// perulangan for
for ($i=1; $i<= 5; $i++){
    echo "Angka ke-".$i."<br>";
}

/// array
$buah=["Apel,'Jeruk", "Mangga"];
for($i=0; $i < count($buah); $i++){
    echo $buah[$i]."<br>";
}

// perulangan while
$nilai = 1;

while ($nilai <= 5){
    echo "Nilai: ".$nilai."<br>";
    $nilai++;
}

// perulangan foreach
$mahasiswa = [
   "10001" => "Andi",
   "10002" => "Budi",
   "10003" => "Citra"
];
foreach ($mahasiswa as $nim => $nama) {
   echo "NIM: ". $nim .", Nama:". $nama."<br>";
}

// ternary
$umur = 18;
$status = ($umur >= 17)? "Dewasa" : "Anak-anak";
echo $status;



?>
<?php
echo '<a href="index.php">Beranda</a> | <a href="about.php">Tentang</a> | <a href="contact.php">Kontak</a>';
?>