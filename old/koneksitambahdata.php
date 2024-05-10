<?php
require 'koneksi.php';

// Terima data dari formulir
$nama = $_POST['nama'];
$fakultas = $_POST['fakultas'];
$no_hp = $_POST['no_hp'];

// Ambil nama file gambar
$nama_file = $_FILES['gambar']['name'];

// Lokasi penyimpanan file gambar
$lokasi = 'img/';

// Upload file gambar ke folder uploads
if(move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi.$nama_file)){
    // File berhasil diunggah, masukkan data ke dalam tabel film
    $query = "INSERT INTO tambah_data (nama, fakultas, no_hp, gambar) VALUES ('$nama', '$fakultas', '$no_hp', '$nama_file')";

    if (mysqli_query($conn, $query)) {
        // Data berhasil disimpan, tampilkan alert
        echo '<script>alert("Data berhasil ditambahkan ke database.");</script>';
        // Redirect kembali ke halaman tambah
        echo '<script>window.location.href = "tambahdata.html";</script>';
    } else {
        echo "Gagal menambahkan data ke database: " . mysqli_error($conn);
    }
} else {
        // Data berhasil disimpan, tampilkan alert
        echo '<script>alert("Isi Semua Data");</script>';
        // Redirect kembali ke halaman tambah
        echo '<script>window.location.href = "tambah.php";</script>';
}

?>