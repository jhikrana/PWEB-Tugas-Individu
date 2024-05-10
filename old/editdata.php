<?php
// Pastikan Anda menghubungkan ke database di sini
require 'koneksi.php';

// Periksa apakah parameter ID telah diberikan dalam URL
if(isset($_GET['id'])) {
    // Dapatkan ID dari parameter URL
    $id = $_GET['id'];

    // Lakukan query untuk mendapatkan data peserta dengan ID tertentu
    $query = "SELECT * FROM tambah_data WHERE ID = $id";
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if($result) {
        // Periksa apakah ada data yang ditemukan
        if(mysqli_num_rows($result) > 0) {
            // Ambil data peserta dari hasil query
            $data = mysqli_fetch_assoc($result);
        } else {
            // Jika tidak ada data yang ditemukan, tampilkan pesan kesalahan
            echo "Data tidak ditemukan.";
        }
    } else {
        // Jika query gagal dieksekusi, tampilkan pesan kesalahan
        echo "Terjadi kesalahan dalam menjalankan query: " . mysqli_error($conn);
    }

    // Tutup koneksi ke database
    mysqli_close($conn);
} else {
    // Jika parameter ID tidak ditemukan dalam URL, tampilkan pesan kesalahan
    echo "Parameter ID tidak ditemukan dalam URL.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>
    <link href="edit.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="main-content">
            <div class="breadcrumb">
                <span class="breadcrumb-base">Home</span> / Dashboard / Edit Data Peserta
            </div>
            <h1>Edit Data Peserta</h1>
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['ID']; ?>">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas:</label>
                    <input type="text" id="fakultas" name="fakultas" value="<?php echo $data['fakultas']; ?>">
                </div>
                <div class="form-group">
                    <label for="no_hp">No. Hp:</label>
                    <input type="text" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']; ?>">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" id="gambar" name="gambar">
                </div>
                <button type="submit" class="btn btn-green">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
