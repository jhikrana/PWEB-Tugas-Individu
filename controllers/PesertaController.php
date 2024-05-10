<?php
require_once "models/PesertaModel.php";
require_once "function/function.php";

class PesertaController
{

  public function index()
  {
    $data = PesertaModel::read();
    loadView('dashboard', $data);
  }

  public function formcreate()
  {
    loadView('createpeserta');
  }

  public function create()
  {
    if ($_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
      $gambar = $_FILES['gambar']['name'];
      $gambar_tmp = $_FILES['gambar']['tmp_name'];
      $upload_path = 'views/asset/img/';
      if (move_uploaded_file($gambar_tmp, $upload_path . $gambar)) {
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $fakultas = $_POST['fakultas'];
        $data = PesertaModel::create($nama, $fakultas, $no_hp, $gambar);
        header("Location:/peserta");
      } else {
        echo 'Gagal mengunggah file.';
        exit();
      }
    } else {
      echo 'Terjadi kesalahan saat mengunggah file.';
      exit();
    }
  }

  public function detail($id)
  {
    $data = PesertaModel::detail($id);
    return $data;
  }

  public function formupdate($id)
  {
    $data = PesertaModel::detail($id);
    loadView('updatepeserta', $data);
  }

  public function update($id)
  {
    if ($_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
      $new_gambar = $_FILES['gambar']['name'];
      $new_gambar_tmp = $_FILES['gambar']['tmp_name'];
      $upload_path = 'views/asset/img/'; // Path folder img, sesuaikan dengan struktur folder Anda

      // Pindahkan file yang diunggah ke folder img
      if (move_uploaded_file($new_gambar_tmp, $upload_path . $new_gambar)) {
          // Tangani pembaruan data di database
          $new_nama = $_POST['nama'];
          $new_no_hp = $_POST['no_hp'];
          $new_fakultas = $_POST['fakultas'];
          $data = PesertaModel::update_profil($id, $new_nama, $new_fakultas, $new_no_hp, $new_gambar);
          header("Location:/peserta");
      } else {
          echo 'Gagal mengunggah file.';
          exit();
      }
  } else {
      // Tangani pembaruan data di database jika tidak ada file yang diunggah
      $new_nama = $_POST['nama'];
      $new_no_hp = $_POST['no_hp'];
      $new_fakultas = $_POST['fakultas'];

      $data = PesertaModel::update($id, $new_nama, $new_fakultas, $new_no_hp);
      header("Location:/peserta");
  }
  }

  public function delete($id)
  {
    global $url;
    $data = PesertaModel::delete($id);
    header("Location:/peserta");
  }
}
