<?php

require 'koneksi.php';


if (isset($_POST['bhapus'])) {

    $hapus =mysqli_query ($koneksi, "DELETE FROM tbl_tugas WHERE id_mhs ='$_POST[id_mhs]'");
    
    if ($hapus){
      echo "<script> 
      alert('hapus data sukses!!!');
      document.location='home.php';
      </script>";
    
    
    
    } else {
      echo "<script> 
      alert('hapus data gagal!');
      document.location='home.php';
      </script>";
    }
    
    }

