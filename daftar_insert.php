<?php
require_once "class/user_class.php";
$username=$_POST['user'];
$pwd=$_POST['pass'];
$pwd1=$_POST['pass1'];

$data=[
    'username'=>$username,
    'pwd'=>$pwd,
    'pwd1'=>$pwd1
];

$exe= $usr->daftarInsert($data);

?>