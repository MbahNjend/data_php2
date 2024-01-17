

<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "2";
    header("Refresh: $sec; url=$page");
   
   
?>

<?php
$nama_lengkap = "Rafa Rajendra";
$nama_pendek = "Rafa";
$ttl = "16-12-2005";
$umur = "18";
$berat = 52.1;
$tinggi = 176.5;
$sekolah = "SMK Muhammadiyah 1 Yogyakarta";
$jurusan = "Rekayasa Perangkat Lunak";
$alamat = "Jln Nitikan";
$kelas = "XI RPL";
echo "Halo Perkenalan namaku $nama_lengkap <br> dan bisa dipanggil $nama_pendek <br> Saya lahir tanggal $ttl umurku sekarang $umur th <br> beratku $berat kg <br>";
echo "tinggiku $tinggi cm <br>";
echo "aku sekarang sekolah di $sekolah <br>
Dijurusan $jurusan <br> dan sekarang duduk dikelas $kelas <br>";
echo "Rumahku ada di $alamat <br>";
echo "<br>";
?>


<?php
$nama_pembeli1 = "Rafa Rajendra";
$nama_pembeli2 = "Afkar Ezi ";
$nama_pembeli3 = "Mbah Njend";
$nama_pembeli4 = "Putri";

$nama_barang[] = "Indomie";
$harga_barang[] = 3000;

$nama_barang[] = "MSI GF63";
$harga_barang[] = 10000000;

$nama_barang[] = "Good Day";
$harga_barang[] = 3000;

$nama_barang[] = "Macaroni";
$harga_barang[] = 5000;

echo "$nama_pembeli1 <br>";
echo "Nama Barang: ". $nama_barang[0] . '<br>';
echo "Harga Barang: " . $harga_barang[0] . '<br>';
echo "<br>";

echo "$nama_pembeli2 <br>";
echo "Nama Barang: ". $nama_barang[1] . '<br>';
echo "Harga Barang :" . $harga_barang[1] . '<br>';
echo "<br>";

echo "$nama_pembeli3 <br>";
echo "Nama Barang: ". $nama_barang[2] . '<br>';
echo "Harga Barang" . $harga_barang[2] . '<br>';
echo "<br>";

echo "$nama_pembeli4 <br>";
echo "Nama Barang: ". $nama_barang[3] . '<br>';
echo "Harga Barang" . $harga_barang[3] . '<br>';
echo '<br>';

?>


<?php
// tipe data char
$jenis_kelamin = 'laki';

//tipe data string
$nama_lengkap = "Rafa Rajendra";

//tipe data int
$umur = 23;

//tipe data float
$berat = 52.1;

//tipe data boolean
$pelajar = false;

class Siswa {

    public $nama;
    public $nim;

    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
    }
}

// tipe data objek 
$siswa = new Siswa("Rafa Rajendra" , "1627363");

//tipe data array 
$makanan = array("mie","nasi");

echo "$jenis_kelamin <br>";
echo "$nama_lengkap <br>";
echo "$umur <br>";
echo "$berat <br>";
echo "$pelajar <br>";
$siswa->nama;
$siswa->tampilkandata();
echo $makanan[0];

echo '<br>';

?>


<?php

$tmp = 3943;

unset($tmp);

echo '$tmp';
echo '<br>';
?>


<?php
define('DB_SERVER','localhost');
define ('DB-USER','rafa');
define ('DB_PASS','db1293');
define ('DB_CODE','1221');
define ('DB_NAME','mbahnjend');

const API_KEY = "1565";

?>

<?php

define("VERSION","1.1.1");

const SITE_NAME = "Halo gais";
const BASE_URL = "github.com/mbahnjend";

echo "site name :" . SITE_NAME . "<br/>";
echo "URL :" . BASE_URL . "<br/>";
echo "version :" . VERSION . "<br/>";

?>
