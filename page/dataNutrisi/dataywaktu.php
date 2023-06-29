<?php
require 'asset/inc/config.php';

$sql2 = "SELECT timestamp FROM cobapost ORDER BY id DESC LIMIT 7";
$result = $koneksi->query($sql2);

// Buat array kosong untuk menampung data
$data2 = array();

// Looping untuk mengambil data dari hasil query
while ($row = mysqli_fetch_assoc($result)) {
  // Konversi nilai timestamp ke dalam format waktu dengan string H:i:s
  // konversi nilai timestamp ke dalam format tanggal dengan string Y-m-d
  $waktu2 = date('Y-m-d', strtotime($row['timestamp']));
  // Tambahkan nilai ke dalam array dengan format yang diinginkan
  $data2[] = "String('$waktu2')";
}

// Balik urutan array agar data terbaru berada di indeks pertama
$data2 = array_reverse($data2);

// Gabungkan array menjadi sebuah string dengan format yang diinginkan
$json_datawaktu = "[" . implode(",", $data2) . "]";

// Tampilkan data dalam format yang diinginkan
// echo $json_datawaktu;
?>