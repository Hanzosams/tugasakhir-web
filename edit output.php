<?php

require 'koneksi.php';


if (isset($_POST['bedit'])) {

    $edit =mysqli_query ($koneksi, "UPDATE tbl_tugas SET
                                                        Nama = '$_POST[Nama]' ,    
                                                        tanggal = '$_POST[Tanggal]' ,    
                                                        Nama_mata_kuliah = '$_POST[Nama_Mata_Kuliah]' ,    
                                                        link = '$_POST[Link]'    
                                                        WHERE id_mhs ='$_POST[id_mhs]'");
    
    if ($edit){
      echo "<script> 
      alert('edit data sukses!!!');
      document.location='home.php';
      </script>";
    
    
    
    } else {
      echo "<script> 
      alert('simpan data gagal!');
      document.location='home.php';
      </script>";
    }
    
    }


    ?>