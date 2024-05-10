<?php
// Pastikan Anda menghubungkan ke database di sini
require 'koneksi.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirim dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $no_hp = $_POST['no_hp'];

    // Perbarui data peserta di database menggunakan perintah SQL UPDATE
    $query = "UPDATE tambah_data SET nama='$nama', fakultas='$fakultas', no_hp='$no_hp' WHERE ID='$id'";
    $result = mysqli_query($conn, $query);

    // Periksa apakah perintah UPDATE berhasil dieksekusi
    if($result) {
        // Redirect kembali ke halaman dashboard jika berhasil
        header("Location: dashboard.php");
        exit;
    } else {
        // Tampilkan pesan kesalahan jika gagal
        echo "Terjadi kesalahan dalam memperbarui data: " . mysqli_error($conn);
    }

    // Tutup koneksi ke database
    mysqli_close($conn);
}
?>
