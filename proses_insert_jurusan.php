<?php
include "class/jurusan_class.php";
    $jurusan = $_POST['kode_jurusan'];
    $nama = $_POST['nama'];

    $data=[
        'jurusan' => $jurusan,
        'nama' => $nama,
    ];
        $exe = $jrs->insertJurusan($data);
        if($exe){
            echo "<script>alert('Data berhasil disimpan');window.location='jurusan.php';</script>";
        }else {
            echo "<script>alert('Data gagal disimpan');window.location='jurusan.php';</script>";
        }
?>