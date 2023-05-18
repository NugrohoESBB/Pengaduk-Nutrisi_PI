<?php
require 'asset/inc/config.php';

$sql = "SELECT nutrisi_b FROM cobapost ORDER BY id DESC LIMIT 20";
$result = $koneksi->query($sql);

// Buat array kosong untuk menampung data
$data = array();

// Looping untuk mengambil data dari hasil query
while ($row = mysqli_fetch_assoc($result)) {
  // Konversi nilai dari string ke integer
  $nutrisi_a = intval($row['nutrisi_b']);
  // Tambahkan nilai ke dalam array
  $data[] = $nutrisi_a;
}

// Balik urutan elemen array urutan reverse akan mmebuat data dari yg paling lama ke terbaru dari kiri ke kanan
$data = array_reverse($data);

// Konversi array ke dalam format JSON
$json_nutrisiB = json_encode($data);

// Tampilkan data dalam format JSON
// echo $json_nutrisiB;
?>