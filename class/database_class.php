<?php
class database{
    protected $conn;

    function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","","ba214");

        return $this->conn;
    }
}
?>