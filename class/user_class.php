<?php
require_once "database_class.php";
class user extends database{
    private $table = 'user';

    function __construct()
    {
        parent::__construct();
    }

    function loginAction($data){
        extract($data);
        $qry= mysqli_query($this->conn, "SELECT * FROM user WHERE username = '$username' AND password = '$pwd'");
        $login = mysqli_fetch_assoc($qry) ;
        return $login;
    }

    function daftarInsert($data){
        extract($data);

        $cek_user= mysqli_query($this->conn, "SELECT * FROM $this->table WHERE username = '$username'");
        $cek_login = mysqli_num_rows($cek_user);

        if($cek_login > 0){
            echo"<script>alert('username telah terdaftar');window.location='daftar.php';</script>";
        }else{
            if($pwd != $pwd1){
                echo"<script>alert('password tidak sesuai');window.location='daftar.php';</script>";
            }else{
                $qry=mysqli_query($this->conn,"INSERT INTO user VALUES (
                    '".$data['username']."',
                    '".$data['pwd']."'
                )");
                echo "<script>alert('Data berhasil disimpan');window.location='login.php';</script>";
            }
        }
        return $qry;   
    }

    function access(){
        session_start();
        if(empty($_SESSION['username'])){
            echo"<script>alert('Silahkan Login terlebih dahulu');window.location='login.php'</script>";
        }
    }
}
$usr= new user;
?>