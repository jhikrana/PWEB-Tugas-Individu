<?php

require_once 'config/database.php';

class AuthModel
{

  static function getdata($username)
  {
    global $conn;
    $query = "SELECT * FROM tbl_user WHERE username='" . $username . "'";
    $result = mysqli_query($conn, $query);
    $data = array();
    if ($result->num_rows > 0) {
      while ($a = $result->fetch_array()) {
        $data[] = $a;
      }
    }
    return $data;
  }

  static function register($nama, $no_telepon, $username, $password)
  {
    global $conn;
    $query = "INSERT INTO tbl_user (nama, no_telepon, username, password) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", htmlspecialchars($nama), htmlspecialchars($no_telepon), htmlspecialchars($username), htmlspecialchars($password));
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
}
