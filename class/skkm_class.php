<?php
require_once "database_class.php";
class skkm extends database{

    private $table = 'skkm_2';

    function __construct()
    {
        parent::__construct();
    }

    function tabelSkkm(){
        $qry = mysqli_query($this->conn, "SELECT a.nim, a.nama_mhs, b.skkm_wajib, b.skkm_pilihan, b.skkm_lain FROM mahasiswa a LEFT JOIN skkm_2 b ON a.nim = b.nim");
        return $qry;
    }

    function cekNim1($nim){
        $cek=mysqli_query($this->conn,"SELECT*FROM skkm_2 WHERE nim='$nim'");
        $cek_nim1= mysqli_num_rows($cek);
        return $cek_nim1;
    }

    function insertSkkm($data){
        extract($data);
        $cek=mysqli_query($this->conn,"SELECT*FROM mahasiswa WHERE nim='$nim'");
        $cek_nim= mysqli_num_rows($cek);
        if($cek_nim>0){
            $qry=mysqli_query($this->conn, "INSERT INTO $this->table VALUE (
                '".$data['nim']."',
                '".$data['skkm_wajib']."',
                '".$data['skkm_pilihan']."',
                '".$data['skkm_lain']."'
                )");
        }else{
            echo"<script>alert('NIM Belum Terinput Pada Tabel Biodata, Silahkan Input Terlebih Dahulu');window. location='skkm_2.php';</script>"; 
        }
        return $qry;
    }

    function getNim($nim){
        $qry =mysqli_query($this->conn, "SELECT * FROM $this->table WHERE nim = '$nim'") ;
        return $qry;
    }

    function updateSkkm($data){
        extract($data);
        $cek=mysqli_query($this->conn, "SELECT*FROM $this->table WHERE nim='$nim'");
        $cek_nim=$cek;
        while($data = mysqli_fetch_assoc($cek_nim)){
            $qry=mysqli_query($this->conn,"UPDATE skkm_2 SET
                skkm_wajib = '$skkm_wajib' + '{$data['skkm_wajib']}',
                skkm_pilihan = '$skkm_pilihan' + '{$data['skkm_pilihan']}',
                skkm_lain = '$skkm_lain' + '{$data['skkm_lain']}'
                WHERE nim = '$nim'");   
        }
        return $qry;
    }

}
$skm= new skkm;
?>