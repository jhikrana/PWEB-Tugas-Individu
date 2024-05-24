<?php
require_once "models/AuthModel.php";
require_once "function/function.php";

class AuthController
{
  public function __construct()
  {
    session_start();
    if (isset($_SESSION['is_auth']) and $_SESSION['is_auth'] == true) {
      echo "<script>window.location.href = '/dashboard'</script>";
    }
  }

  static function viewlogin()
  {
    loadView('auth/login');
  }

  static function viewregister()
  {
    loadView('auth/register');
  }

  static function login()
  {
    global $url;
    if (empty($_POST["username"])) {
      echo "<script>alert('Username tidak boleh kosong');window.location.href = '/login'</script>";
      exit();
    } else if (empty($_POST["password"])) {
      echo "<script>alert('Password tidak boleh kosong');window.location.href = '/login'</script>";
      exit();
    }
    $data = AuthModel::getdata($_POST["username"]);
    if ($_POST["username"] != $data[0]['username']) {
      echo ("<script>alert('Username salah');window.location.href = '/login'</script>");
      exit();
    }
    if ($_POST["password"] != $data[0]['password']) {
      echo ("<script>alert('Password salah');window.location.href = '/login'</script>");
      exit();
    }
    session_start();
    $_SESSION["nama_lengkap"] = $data[0]['nama_lengkap'];
    $_SESSION["username"] = $data[0]['username'];
    $_SESSION["id"] = $data[0]['ID'];
    $_SESSION["no_telepon"] = $data[0]['no_telepon'];
    $_SESSION["is_auth"] = true;
    echo ("<script>alert('Login Berhasil!');window.location.href = '/peserta'</script>");
    exit();
  }

  static function register()
  {
    global $url;
    if (empty($_POST["username"])) {
      echo "<script>alert('Username tidak boleh kosong');window.location.href = '/register'</script>";
      exit();
    } else if (empty($_POST["password"])) {
      echo "<script>alert('Password tidak boleh kosong');window.location.href = '/register'</script>";
      exit();
    } else if (empty($_POST["nama"])) {
      echo "<script>alert('Nama tidak boleh kosong');window.location.href = '/register'</script>";
      exit();
    } else if (empty($_POST["no_telepon"])) {
      echo "<script>alert('Nomor telepon tidak boleh kosong');window.location.href = '/register'</script>";
      exit();
    }
    $data = AuthModel::getdata($_POST["username"]);
    if ($data[0]['username'] != "") {
      echo ("<script>alert('Username sudah dipakai!');window.location.href = '/register'</script>");
      exit();
    }
    $result = AuthModel::register($_POST['nama'], $_POST['no_telepon'], $_POST['username'], $_POST['password']);
    if ($result) {
      $data = AuthModel::getdata($_POST["username"]);
      session_start();
      $_SESSION["nama_lengkap"] = $data[0]['nama_lengkap'];
      $_SESSION["username"] = $data[0]['username'];
      $_SESSION["id"] = $data[0]['ID'];
      $_SESSION["no_telepon"] = $data[0]['no_telepon'];
      $_SESSION["is_auth"] = true;
      echo ("<script>alert('Registrasi Berhasil!');window.location.href = '/peserta'</script>");
      exit();
    } else {
      echo ("<script>alert('gagal register, ulangi kembali');window.location.href = '/register'</script>");
      exit();
    }
  }

  static function logout()
  {
    global $url;
    session_start();
    if (!isset($_SESSION['is_auth'])) {
      echo "<script>window.location.href = '/login'</script>";
      exit();
    }
    session_unset();
    session_destroy();
    header('Location: /login');
  }
}
