<?php
// Include file koneksi database
require 'koneksi.php';

// Periksa apakah parameter ID telah diterima melalui metode GET
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Escape parameter ID untuk mencegah serangan SQL Injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Buat query DELETE untuk menghapus data berdasarkan ID
    $query = "DELETE FROM tambah_data WHERE ID = '$id'";

    // Jalankan query DELETE
    if (mysqli_query($conn, $query)) {
        // Redirect kembali ke halaman dashboard dengan pesan sukses
        header("Location: dashboard.php?delete_success=true");
        exit();
    } else {
        // Redirect kembali ke halaman dashboard dengan pesan error
        header("Location: dashboard.php?delete_error=true");
        exit();
    }
} else {
    // Redirect kembali ke halaman dashboard jika parameter ID tidak diberikan
    header("Location: dashboard.php");
    exit();
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
