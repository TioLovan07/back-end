<?php
include "class/jurusan_class.php";
$jurusan = $_POST['jurusan'];
$nama = $_POST['nama'];

    $data=[
        'jurusan'=>$jurusan,
        'nama'=>$nama,
    ];

    $exe=$jrs->updateJurusan($data);
    if($exe){
        echo "<script>alert('Data berhasil disimpan');window.location='jurusan.php';</script>";
    }else{
        echo "<script>alert('Data gagal disimpan');window.location='edit_jurusan.php';</script>";
    }
?>