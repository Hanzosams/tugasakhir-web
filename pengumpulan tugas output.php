<?php


require 'koneksi.php';









$nama =$_POST["Nama"];
$tanggal =$_POST["Tanggal"];
$nama_matkul =$_POST["Nama_Mata_Kuliah"];
$link =$_POST["Link"];


$query_sql1 = "INSERT INTO tbl_tugas (Nama, Tanggal, Nama_Mata_Kuliah, Link)
values ('$nama', '$tanggal', '$nama_matkul', '$link')";

if (mysqli_query($koneksi,$query_sql1)){
   echo "<script> 
   alert('simpan data sukses!');
   document.location='home.php';
   </script>";

} else {
    echo "pendaftaran gagal:" . mysqli_error($koneksi);  
}









?>
