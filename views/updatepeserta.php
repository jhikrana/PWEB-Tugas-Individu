<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>
    <link href="/views/asset/css/edit.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="main-content">
            <div class="breadcrumb">
                <span class="breadcrumb-base">Home</span> / Dashboard / Edit Data Peserta
            </div>
            <h1>Edit Data Peserta</h1>
            <form action="/updatepeserta/<?= $data[0]['id'] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $data[0]['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas:</label>
                    <input type="text" id="fakultas" name="fakultas" value="<?php echo $data[0]['fakultas']; ?>">
                </div>
                <div class="form-group">
                    <label for="no_hp">No. Hp:</label>
                    <input type="text" id="no_hp" name="no_hp" value="<?php echo $data[0]['no_hp']; ?>">
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