<?php
include "koneksi.php";
$nim_skkm = $_POST['nim'];
$akademik = $_POST['akademik'];
$minat = $_POST['minat'];
$organisasi = $_POST['organisasi'];
$wajib = $_POST['wajib'];

if(!empty($akademik)){
    $hasilAkademik = $akademik * 3;
}else{
    $hasilAkademik = 0;
}
if(!empty($minat)){
    $hasilMinat = $minat * 2;
}else{
    $hasilMinat = 0;
}
if(!empty($organisasi)){
    $hasilOrganisasi = $organisasi * 4;
}else{
    $hasilOrganisasi = 0;
}
if(!empty($wajib)){
    $hasilWajib = $wajib * 2;
}else{
    $hasilWajib = 0;
}
//total skkm 
$skkm_total = $hasilAkademik + $hasilMinat + $hasilOrganisasi + $hasilWajib;
$skkm = $skkm_total;



if(isset($_POST["submit"])){
    //cek nim
    $cek=mysqli_query($con,"SELECT*FROM mahasiswa WHERE nim='$nim_skkm'");
    $cek_nim= mysqli_num_rows($cek);
    if($cek_nim>0){
        $qry="INSERT INTO skkm VALUE (
            '$nim_skkm',
            '$akademik',
            '$minat',
            '$organisasi',
            '$wajib',
            '$skkm'
            )";
            $exe= mysqli_query($con,$qry);

            if($exe){
                echo "<script>alert('Data berhasil disimpan');window.location='skkm.php#2';</script>";
            }
            else{
                echo "<script>alert('Data gagal disimpan');window.location='tambah_skkm.php';</script>";
            }
    }else{
        echo"<script>alert('NIM Belum Terinput Pada Tabel Biodata, Silahkan Input Terlebih Dahulu');window.location='skkm.php';</script>"; 
    }

        
    
        
}       
       
?>