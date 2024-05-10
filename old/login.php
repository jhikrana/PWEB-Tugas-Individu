<?php
require 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.php");
} else{
    echo "<center><h1>Username dan Password tidak sesuai.</h1>
            <button><strong><a href='login.html'>kembali</a></strong></button></center>";
}