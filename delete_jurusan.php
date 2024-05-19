<?php
    require_once "class/jurusan_class.php";
    $jurusan = ['jurusan'=>$jurusan];
    
    $exe= $jrs->deleteJurusan($jurusan);

    if($exe){
        echo "<script>alert('Data berhasil dihapus');window.location='jurusan.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal dihapus');window.location='jurusan.php';</script>";
    }
?>