<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Peserta Lomba</title>
  <link href="/views/asset/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <?php include 'views/components/sidebar.php' ?>
    <div class="main-content">
      <div class="breadcrumb">
        <span class="breadcrumb-base">Home</span> / Dashboard
      </div>
      <h1>Daftar Peserta Lomba</h1>
        <div class="data">
          <h2><a href="/pesertacreate" class="btn-tambah">Tambah Data</a></h2>
          <table>
            <tr>
              <th class="border-left">ID</th>
              <th class="border-left">Nama</th>
              <th class="border-left">Fakultas</th>
              <th class="border-left">No HP</th>
              <th class="border-left">Gambar</th>
              <th class="border-left">Aksi</th>
            </tr>
            <?php
            if ($data) {
              for ($i = 0; $i < count($data); $i++) {
                echo "<tr>";
                echo "<td>" . $data[$i]["id"] . "</td>";
                echo "<td>" . $data[$i]["nama"] . "</td>";
                echo "<td>" . $data[$i]["fakultas"] . "</td>";
                echo "<td>" . $data[$i]["no_hp"] . "</td>";
                echo "<td><img src='views/asset/img/" . $data[$i]["gambar"] . "' style='width: 20%; height: 20%;'></td>";
                echo "<td>";
                echo "<a href='pesertaupdate/" . $data[$i]["id"] . "' class='btn-edit'>Edit</a>";
                echo " | ";
                echo "<a href='deletepeserta/" . $data[$i]["id"] . "' class='btn-delete'>Delete</a>";
                echo "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='6'>Tidak ada data dalam tabel</td></tr>";
            }
            ?>
          </table>
        </div>
    </div>
</body>

</html>