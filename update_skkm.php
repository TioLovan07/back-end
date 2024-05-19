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
    $cek="SELECT*FROM skkm WHERE nim='$nim_skkm'";
    $cek_nim= mysqli_query($con,$cek);

    while($data = mysqli_fetch_assoc($cek_nim)){
        $qry="UPDATE skkm SET
            akademik ='$akademik'+'{$data['akademik']}',
            minat_bakat ='$minat'+'{$data['minat_bakat']}',
            organisasi ='$organisasi'+'{$data['organisasi']}',
            kegiatan_wajib ='$wajib'+'{$data['kegiatan_wajib']}',
            total_skkm ='$skkm'+'{$data['total_skkm']}'
            WHERE nim ='$nim_skkm'";

            $exe= mysqli_query($con,$qry);
            if($exe){
                echo "<script>alert('Data berhasil ditambah');window.location='skkm.php#2';</script>";
            }
            else{
                echo "<script>alert('Data gagal ditambah');window.location='tambah_skkm.php';</script>";
            }
    }        
}       
       
?>