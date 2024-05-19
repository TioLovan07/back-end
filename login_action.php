<?php
require_once "class/user_class.php";
//include "koneksi.php";

$username=$_POST['user'];
$pwd=$_POST['pass'];

    $data=[
        'username'=>$username,
        'pwd'=>$pwd
    ];

    //$qry= mysqli_query($con, "SELECT * FROM user WHERE username = '$username' AND password = '$pwd'");
    //$cek_login = mysqli_fetch_assoc($qry) ;

    if($usr->loginAction($data)){
        session_start();
        $_SESSION['username']=$data['username'];
        echo"<script>alert('Login Berhasil');window.location='home.php';</script>";
    }
    else{
        echo"<script>alert('Login gagal');window.location='login.php';</script>";
    }
  
?>
