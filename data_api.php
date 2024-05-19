<?php

// Mendefinisikan header HTTP untuk memastikan response dalam format JSON
header("Content-Type: application/json; charset=UTF-8");

include "class/mahasiswa_class.php";
$mhs= new mahasiswa();

// Mendefinisikan metode HTTP yang diterima
$method = $_SERVER["REQUEST_METHOD"];

function sendResponse($status, $data = null)
{
    http_response_code($status);
    echo json_encode($data);
}

if($method == "GET"){
    $datamhs=$mhs->getMahasiswa();
    sendResponse(200,$datamhs);

}elseif($method == "POST"){
    // Menerima data dari request
    $data = json_decode(file_get_contents("php://input"), true);
    $insdata=$mhs->insertMahasiswa($data);
    if($insdata){
        $res= "Data Berhasil disimpan";
    } else{
        $res= "Data Gagal disimpan";
    }
    sendResponse(200, $res);

}elseif($method == "PUT"){
    // Menerima data dari request
    $data = json_decode(file_get_contents("php://input"), true);
    $update =$mhs->updateMahasiswa($data);
    if($update){
        $res= "Data Berhasil disimpan";
    } else{
        $res= "Data Gagal disimpan";
    }
    sendResponse(200, $res);

}elseif($method == "DELETE"){
    // Menerima data dari request
    $data = json_decode(file_get_contents("php://input"), true);
    $delete = $mhs->delete($data['nim']);
    sendResponse(200, "Data : " . $delete . " (Berhasil dihapus)");
}