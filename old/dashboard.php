<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta Lomba</title>
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-title">
                <h2>Peserta Lomba</h2>
            </div>
            <div class="sidebar-item">
                <a href="#">Dashboard</a>
            </div>
            <div class="sidebar-item">
                <a href="#">Profil</a>
            </div>
            <div class="sidebar-item logout">
<<<<<<< HEAD
<<<<<<< HEAD
                <a href="#" id="logoutbutton">Logout</a>
=======
                <a href="#">Logout</a>
>>>>>>> 009618afe2b61712a8495999d68b4c2828cd3c10
=======
                <a href="#" id="logoutbutton">Logout</a>
>>>>>>> ceecdefe974edbaad8607548f5ffb15afe8096ec
            </div>
        </div>
        <div class="main-content">
            <div class="breadcrumb">
                <span class="breadcrumb-base">Home</span> / Dashboard
            </div>
            <h1>Daftar Peserta Lomba</h1>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ceecdefe974edbaad8607548f5ffb15afe8096ec
            <form action="dashboard.php" method="POST">
                <div class="data">
                    <h2><a href="tambahdata.html" class="btn-tambah">Tambah Data</a></h2>
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
                        require 'koneksi.php';

                        $query = "SELECT * FROM tambah_data";
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["ID"] . "</td>";
                                    echo "<td>" . $row["nama"] . "</td>";
                                    echo "<td>" . $row["fakultas"] . "</td>";
                                    echo "<td>" . $row["no_hp"] . "</td>";
                                    echo "<td><img src='img/" . $row["gambar"] . "' style='width: 20%; height: 20%;'></td>";
                                    echo "<td>";
                                    echo "<a href='editdata.php?id=" . $row["ID"] . "' class='btn-edit'>Edit</a>";
                                    echo " | ";
                                    echo "<a href='delete.php?id=" . $row["ID"] . "' class='btn-delete'>Delete</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>Tidak ada data dalam tabel</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Terjadi kesalahan dalam menjalankan query: " . mysqli_error($conn) . "</td></tr>";
                        }

                        mysqli_close($conn);
                        ?>

                    </table>
                </div>
            </form>
    </div>

    <script>
        document.getElementById("logoutbutton").addEventListener("click", function() {
            window.location.href = "login.html";
        });

        document.getElementById("tambahDataBtn").addEventListener("click", function() {
            window.location.href = "tambahdata.html";
        });

        function editData() {
            window.location.href = "editdata.php";
        }

    </script>
</body>
</html>
<<<<<<< HEAD
=======
            <button class="btn-blue">+ Tambah Data Peserta</button>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>No. Hp</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Putri Anggraini</td>
                    <td>Ilmu Komputer</td>
                    <td>08123456789</td>
                    <td>
                        <button class="btn-yellow">Edit</button>
                        <br/>
                        <button class="btn-red">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Stefanus</td>
                    <td>Ilmu Komputer</td>
                    <td>08123456799</td>
                    <td>
                        <button class="btn-yellow">Edit</button>
                        <br/>
                        <button class="btn-red">Delete</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
>>>>>>> 009618afe2b61712a8495999d68b4c2828cd3c10
=======
>>>>>>> ceecdefe974edbaad8607548f5ffb15afe8096ec
