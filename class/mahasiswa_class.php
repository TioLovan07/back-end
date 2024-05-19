<?php
require_once "database_class.php";
class mahasiswa extends database{

    private $table = 'mahasiswa';

    function __construct()
    {
        parent::__construct();
    }

    function getMahasiswa(){
                $qry = mysqli_query($this->conn,"SELECT * FROM mahasiswa");
                while($datas = mysqli_fetch_assoc($qry)){
                    $data[]=$datas;
                }
                return $data;
    }

    function insertMahasiswa($data){
        $qry=mysqli_query($this->conn,"INSERT INTO mahasiswa VALUES (
            '".$data['nim']."',
            '".$data['nama']."',
            '".$data['jurusan']."',
            '".$data['gender']."',
            '".$data['no_hp']."',
            '".$data['alamat']."',
            '".$data['email']."',
            '".$data['nama_foto']."'
        )") ;
        return $qry;
    }

    function updateMahasiswa($data){
        extract($data);
            if(empty($_FILES['nama_foto']['name'])){
                $qry=mysqli_query($this->conn,"UPDATE mahasiswa SET
                nama_mhs ='$nama',
                kode_jurusan ='$jurusan',
                gender ='$gender',
                no_hp ='$no_hp',
                alamat ='$alamat',
                email ='$email'
                WHERE nim='$nim'");
            }else{
               $qry=mysqli_query($this->conn,"UPDATE mahasiswa SET
                nama_mhs ='$nama',
                kode_jurusan ='$jurusan',
                gender ='$gender',
                no_hp ='$no_hp',
                alamat ='$alamat',
                email ='$email',
                nama_foto ='$nama_foto'
                WHERE nim='$nim'");
            } 
        
        return $qry;
    }

    function delete($nim){
        $nim = $_GET['nim'];
        $qry=mysqli_query($this->conn,"DELETE FROM $this->table WHERE nim = '$nim'");
        return $qry;
    }

    function tableMhs(){
                $qry = mysqli_query($this->conn,"SELECT * FROM mahasiswa a LEFT JOIN jurusan b
                        ON a.kode_jurusan = b.kode_jurusan");
                return $qry;
    }

    function getNim($nim){
        extract($nim);
        $qry = mysqli_query($this->conn,"SELECT * FROM $this->table WHERE nim = '$nim'");
        return $qry;
    }

    function selectedGender($data){
        if($data['gender']==1){
            echo '<input class="form-check-input mx-2" type="radio" name="gender" value="1" checked="checked">Laki-Laki
                  <input type="radio" name="gender" value="0">Perempuan';
        } 
        else{
            echo  '<input class="form-check-input mx-2" type="radio" name="gender" value="1">Laki-Laki
                   <input type="radio" name="gender" value="0" checked="checked">Perempuan';
        }
    }
    
}
$mhs=new mahasiswa;
?>