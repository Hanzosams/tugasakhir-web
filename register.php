<?php
require 'koneksi.php';
$username =$_POST["username"];
$password =$_POST["password"];


$query_sql = "INSERT INTO tbl_login (username, password)
values ('$username', '$password')";

if (mysqli_query($koneksi,$query_sql)){
header("location:index.html");
} else {
    echo "pendaftaran gagal:" . mysqli_error($koneksi);
}
