<?php
echo "Halo, selamat datang didunia PHP!<br>";
?>

<?php
  $nama = "Dini";
  $umur = 20;

  // Menampilkan nilai variabel
echo "Nama:" . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";

// define("Nama_Konstanta", nilai);

define("SITE_NAME", "unsika.ac.id");
define("VERSION", "1.0");

echo "Selamat datang di " . SITE_NAME."<br>";
echo " Versi Sistem: ". VERSION."<br>";

// tipe data
//string
$nama = "Dini";
echo "Nama saya adalah ".$nama;
//integer
$umur = "20";
echo "Umur saya".$umur."tahun";
//float
$berat = 41.5;
echo "Berat badan saya".$berat."kg";
// boolean
$isLogin = true;
// array
$buah = ["apel", "jeruk", "mangga"];
echo $buah[1];
// object
class Mahasiswa {
    public $nama;
    public function sapa(){
        return "Halo, saya $this->nama";
    }
}
$mhs = new Mahasiswa();
$mhs->nama ="Dini";
echo $mhs->sapa();
//Nul
$data = null;
var_dump($data);
?>