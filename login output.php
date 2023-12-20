<?php
require 'koneksi.php';
$username =$_POST["username"];
$password =$_POST["password"];


$query_sql = "SELECT * FROM tbl_login
where username= '$username' AND password = '$password'";

$result = mysqli_query($koneksi,$query_sql);



if (mysqli_num_rows($result)> 0){
header("location: home.php");
} else {
    echo "<center><h1>salah ini mah bro.yang bener dong</h1></center>";
}









?>
