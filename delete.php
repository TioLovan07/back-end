<?php
include "class/mahasiswa_class.php";
$nim=['nim'=>$nim];
$exe = $mhs->delete($nim);

    if($exe){
        echo "<script>alert('Data berhasil dihapus');window.location='home.php#biodata';</script>";
    }
    else{
        echo "<script>alert('Data gagal dihapus');window.location='home.php#biodata';</script>";
    }
?>