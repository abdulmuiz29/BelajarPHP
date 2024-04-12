<?php

// Membaca data yang dikirim dari formulir
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal = $_POST['asal'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];

// Memuat file validasi
require_once 'validasi.php';

// Memvalidasi input
$validNama = validasiNama($nama);
$validNim = validasiNim($nim);
$validJenisKelamin = validasiJenisKelamin($jenis_kelamin);
$validAsal = validasiAsal($asal);
$validJurusan = validasiJurusan($jurusan);
$validEmail = validasiEmail($email);

// Menampilkan hasil
if ($validNama && $validNim && $validJenisKelamin && $validAsal && $validJurusan && $validEmail) {
  echo "<p>Data berhasil divalidasi!</p>";
  echo "<p>Nama: $nama</p>";
  echo "<p>NIM: $nim</p>";
  echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
  echo "<p>Asal Kota: $asal</p>";
  echo "<p>Jurusan: $jurusan</p>";
  echo "<p>Email: $email</p>";
} else {
  echo "<p>Terdapat kesalahan pada input data!</p>";
  echo "<ul>";
    if (!$validNama) {
      echo "<li>Nama tidak boleh kosong dan harus terdiri dari huruf.</li>";
    }
    if (!$validNim) {
      echo "<li>NIM harus terdiri dari 12 digit angka.</li>";
    }
    if (!$validJenisKelamin) {
      echo "<li>Jenis kelamin harus dipilih.</li>";
    }
    if (!$validAsal) {
      echo "<li>Asal kota tidak boleh kosong.</li>";
    }
    if (!$validJurusan) {
      echo "<li>Jurusan harus dipilih.</li>";
    }
    if (!$validEmail) {
      echo "<li>Email tidak valid.</li>";
    }
  echo "</ul>";
}

?>
