<?php
require_once "class/skkm_class.php";

$nim = $_POST['nim'];
$wajib = $_POST['wajib'];
$jmlh_wajib = $_POST['jmlh_wajib'];
$akademik = $_POST['akademik'];
$pilihan = $_POST['pilihan'];
$tingkat = $_POST['tingkatan'];
$jmlh_akademik = $_POST['jmlh_akademik'];

$minat = $_POST['minat'];
$pilihan2 = $_POST['pilihan2'];
$tingkat2 = $_POST['tingkatan2'];
$jmlh_minat = $_POST['jmlh_minat'];

$organisasi = $_POST['organisasi'];
$pilihan3 = $_POST['pilihan3'];
$tingkat3 = $_POST['tingkatan3'];
$jmlh_organisasi = $_POST['jmlh_organisasi'];

$lain = $_POST['lain_lain'];
$jmlh_lain =$_POST['jmlh_lain'];

if(empty($jmlh_wajib)){
    $skkm_wajib = 0;
}else{
    switch($wajib){
    case ('kulindus'):
        $skkm_wajib = $jmlh_wajib * 2;
        break;
    case ('karya_tulis'):
        $skkm_wajib = $jmlh_wajib * 4;
        break;
    case ('keanggotaan'):
        $skkm_wajib = $jmlh_wajib * 4;
        break;
    case ('gmti'):
        $skkm_wajib = $jmlh_wajib * 2;
        break;
    case ('dies'):
        $skkm_wajib = $jmlh_wajib * 4;
        break;
    }
}


if(empty($jmlh_akademik)){
    $skkm_akademik = 0;
}else {
        if($pilihan=='konfrensi'){
            switch ($tingkat){
                case(1):
                    $skkm_akademik = $jmlh_akademik * 3;
                    break;
                case(2):
                    $skkm_akademik = $jmlh_akademik * 4;
                    break;
                case(3):
                    $skkm_akademik = $jmlh_akademik * 5;
                    break;
                case(4):
                    $skkm_akademik = $jmlh_akademik * 6;
                    break;
            }
    } elseif ($pilihan=='penelitian'){
            switch ($tingkat){
                case(1):
                    $skkm_akademik = $jmlh_akademik * 4;
                    break;
                case(2):
                    $skkm_akademik = $jmlh_akademik * 5;
                    break;
                case(3):
                    $skkm_akademik = $jmlh_akademik * 5;
                    break;
                case(4):
                    $skkm_akademik = $jmlh_akademik * 6;
                    break;
            }
    } elseif ($pilihan=='seminar'){
            switch ($tingkat){
                case(1):
                    $skkm_akademik = $jmlh_akademik * 2;
                    break;
                case(2):
                    $skkm_akademik = $jmlh_akademik * 2;
                    break;
                case(3):
                    $skkm_akademik = $jmlh_akademik * 3;
                    break;
                case(4):
                    $skkm_akademik = $jmlh_akademik * 3;
                    break;
            }
    } elseif ($pilihan=='kulindus'){
            switch ($tingkat){
                case(1):
                    $skkm_akademik = $jmlh_akademik * 2;
                    break;
                case(2):
                    $skkm_akademik = $jmlh_akademik * 2;
                    break;
                case(3):
                    $skkm_akademik = $jmlh_akademik * 2;
                    break;
                case(4):
                    $skkm_akademik = $jmlh_akademik * 2;
                    break;
            }
    } elseif ($pilihan=='panitia'){
            switch ($tingkat){
                case(1):
                    $skkm_akademik = $jmlh_akademik * 3;
                    break;
                case(2):
                    $skkm_akademik = $jmlh_akademik * 3;
                    break;
                case(3):
                    $skkm_akademik = $jmlh_akademik * 4;
                    break;
                case(4):
                    $skkm_akademik = $jmlh_akademik * 6;
                    break;
            }
    } 
} 

if(empty($jmlh_minat)){
    $skkm_minat = 0;
}else {
        if($pilihan2=='lomba'){
            switch ($tingkat2){
                case(1):
                    $skkm_minat = $jmlh_minat * 3;
                    break;
                case(2):
                    $skkm_minat = $jmlh_minat * 4;
                    break;
                case(3):
                    $skkm_minat = $jmlh_minat * 5;
                    break;
                case(4):
                    $skkm_minat = $jmlh_minat * 6;
                    break;
            }
        } elseif ($pilihan2=='pentas'){
            switch ($tingkat2){
                case(1):
                    $skkm_minat = $jmlh_minat * 2;
                    break;
                case(2):
                    $skkm_minat = $jmlh_minat * 3;
                    break;
                case(3):
                    $skkm_minat = $jmlh_minat * 4;
                    break;
                case(4):
                    $skkm_minat = $jmlh_minat * 5;
                    break;
            }
        } elseif ($pilihan2=='panitia2'){
            switch ($tingkat2){
                case(1):
                    $skkm_minat = $jmlh_minat * 3;
                    break;
                case(2):
                    $skkm_minat = $jmlh_minat * 3;
                    break;
                case(3):
                    $skkm_minat = $jmlh_minat * 4;
                    break;
                case(4):
                    $skkm_minat = $jmlh_minat * 6;
                    break;
            }
        }
    } 
    
if(empty($jmlh_organisasi)){
    $skkm_organisasi = 0;
}else{
        if($pilihan3=='bb'){
            switch ($tingkat3){
                case(1):
                    $skkm_organisasi = $jmlh_organisasi * 5;
                    break;
                case(2):
                    $skkm_organisasi = $jmlh_organisasi * 5;
                    break;
                case(3):
                    $skkm_organisasi = $jmlh_organisasi * 5;
                    break;
                case(4):
                    $skkm_organisasi = $jmlh_organisasi * 5;
                    break;
            }
        } elseif ($pilihan3=='hima'){
            switch ($tingkat3){
                case(1):
                    $skkm_organisasi = $jmlh_organisasi * 3;
                    break;
                case(2):
                    $skkm_organisasi = $jmlh_organisasi * 3;
                    break;
                case(3):
                    $skkm_organisasi = $jmlh_organisasi * 3;
                    break;
                case(4):
                    $skkm_organisasi = $jmlh_organisasi * 3;
                    break;
            }
        } elseif ($pilihan3=='pm'){
            switch ($tingkat3){
                case(1):
                    $skkm_organisasi = $jmlh_organisasi * 2;
                    break;
                case(2):
                    $skkm_organisasi = $jmlh_organisasi * 2;
                    break;
                case(3):
                    $skkm_organisasi = $jmlh_organisasi * 3;
                    break;
                case(4):
                    $skkm_organisasi = $jmlh_organisasi * 4;
                    break;
            }
        } elseif ($pilihan3=='panitia3'){
            switch ($tingkat3){
                case(1):
                    $skkm_organisasi = $jmlh_organisasi * 3;
                    break;
                case(2):
                    $skkm_organisasi = $jmlh_organisasi * 3;
                    break;
                case(3):
                    $skkm_organisasi = $jmlh_organisasi * 4;
                    break;
                case(4):
                    $skkm_organisasi = $jmlh_organisasi * 6;
                    break;
            }
        }
    }

if(empty($jmlh_lain)){
    $skkm_lain = 0;
}else{
    switch($lain){
    case ('panitia2'):
        $skkm_lain = $jmlh_lain * 3;
        break;
    case ('lomba'):
        $skkm_lain = $jmlh_lain * 2;
        break;
    case ('anggota'):
        $skkm_lain = $jmlh_lain * 4;
        break;
    }
}

$skkm_pilihan = $skkm_akademik + $skkm_minat + $skkm_organisasi;

if(isset($_POST["submit"])){
        
        if($skm->cekNim1($nim)>0){
            echo"<script>alert('NIM Sudah Terinput!! Silahkan Klik Tombol Tambah Untuk Menambahkan SKKM');window. location='skkm_2.php';</script>";
        }else{
            $data = [
                'nim' => $nim,
                'skkm_wajib' => $skkm_wajib,
                'skkm_pilihan' => $skkm_pilihan,
                'skkm_lain' => $skkm_lain,
            ];
    
            $exe= $skm->insertSkkm($data);

            if($exe){
                echo "<script>alert('Data berhasil disimpan');window.location='skkm_2.php#2';</script>";
            }
            else{
                echo "<script>alert('Data gagal disimpan');window.location='skkm_2.php';</script>";
            } 
        }
}
?>