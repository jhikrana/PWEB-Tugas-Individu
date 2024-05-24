<?php

require_once 'config/database.php';

class PesertaModel{

  static function read(){
    global $conn;
    $query = "select * from tambah_data";
    $result = mysqli_query($conn, $query);
    $data = array();
    if ($result->num_rows > 0) {
      while($a = $result->fetch_array()) {
        $data[]=$a;
      }
    }
    return $data;
  }

  static function create($nama, $fakultas, $no_hp, $gambar){
    global $conn;
    $query = "insert into tambah_data (nama, fakultas, no_hp, gambar) values (?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $nama, $fakultas, $no_hp, $gambar);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }

  static function detail($id){
    global $conn;
    $query = "select * from tambah_data WHERE ID=".$id;
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
      while($a = $result->fetch_array()) {
        $data[]=$a;
      }
    }
    else { 
      $data = [];
    }
    return $data;
  }

  static function update_profil($id, $nama, $fakultas, $no_hp, $gambar){
    global $conn;
    $stmt = $conn->prepare("update tambah_data set nama=?, fakultas=?, no_hp=?, gambar=? WHERE id=".$id);
    $stmt->bind_param("ssss", $nama, $fakultas, $no_hp, $gambar);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
  
  static function update($id, $nama, $fakultas, $no_hp){
    global $conn;
    $stmt = $conn->prepare("update tambah_data set nama=?, fakultas=?, no_hp=? WHERE id=".$id);
    $stmt->bind_param("sss", $nama, $fakultas, $no_hp);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }

  static function delete($id){
    global $conn;
    $query = "delete from tambah_data where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
}