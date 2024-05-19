<?php
require_once "database_class.php";
class jurusan extends database{

    private $table = 'jurusan';

    function __construct()
    {
        parent::__construct();
    }

    function insertJurusan($data){
        $qry = mysqli_query($this->conn,"INSERT INTO $this->table VALUES (
            '".$data['jurusan']."',
            '".$data['nama']."'
        )");
        return $qry;
        
    }

    function getJurusan($kode_jurusan){
        extract($kode_jurusan);
        $qry =mysqli_query($this->conn, "SELECT * FROM $this->table WHERE kode_jurusan = '$kode_jurusan'") ;
        return $qry;
    }

    function updateJurusan($data){
        extract($data);
            $qry=mysqli_query($this->conn,"UPDATE jurusan SET
                nama_jurusan ='$nama'
                WHERE kode_jurusan ='$jurusan'
                ");
        return $qry;
        
    }

    function deleteJurusan($jurusan){
        $jurusan = $_GET['kode_jurusan'];
        $qry=mysqli_query($this->conn,"DELETE FROM jurusan WHERE kode_jurusan = '$jurusan'");
        return $qry;
    }

    function jurusan(){
        $qry = mysqli_query($this->conn,"SELECT*FROM jurusan");
        while($data=mysqli_fetch_assoc($qry)){
            echo "<option value='{$data['kode_jurusan']}'>{$data['nama_jurusan']}</option>";
        }
    }

    function selectJurusan($id){
        $qry_jurusan = mysqli_query($this->conn,"SELECT * FROM jurusan");
        while ($data_jurusan = mysqli_fetch_assoc($qry_jurusan)) {
            $selected = ($data_jurusan['kode_jurusan'] == $id) ? 'selected' : '';
            echo "<option value='{$data_jurusan['kode_jurusan']}' $selected>{$data_jurusan['nama_jurusan']}</option>";
        }
    }

    function tableJurusan(){
        $qry = mysqli_query($this->conn,"SELECT*FROM jurusan");
        return $qry;
    }

}
$jrs=new jurusan;
?>