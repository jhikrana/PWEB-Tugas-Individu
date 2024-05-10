<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Peserta</title>
    <link href="views/asset/css/style3.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="background"></div> <!-- Background transparan -->
    <div class="container">
        <div class="main-content">
            <div class="breadcrumb">
                <span class="breadcrumb-base">Home</span> / Dashboard / Tambah Data Peserta
            </div>
            <h1>Tambah Data Peserta</h1>
            <form action="/createpeserta" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas:</label>
                    <input type="text" id="fakultas" name="fakultas" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">No. Hp:</label>
                    <input type="text" id="no_hp" name="no_hp" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" id="gambar" name="gambar" accept="uploads/*" required>
                </div>
                <button type="submit" class="btn btn-green">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
