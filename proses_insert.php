<?php
    include "class/mahasiswa_class.php";
    $target_dir = "uploud/";
    $target_file = $target_dir . basename($_FILES["nama_foto"]["name"]);
    $nama_foto=basename($_FILES["nama_foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["nama_foto"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
            die();
        }
    

    }
    move_uploaded_file($_FILES["nama_foto"]["tmp_name"],$target_file);
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $gender=$_POST['gender'];
    $no_hp=$_POST['no_hp'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $nama_foto=$_FILES['nama_foto']['name'];
    
            $data=[
                'nim' => $nim,
                'nama' => $nama,
                'jurusan' => $jurusan,
                'gender' => $gender,
                'no_hp' => $no_hp,
                'alamat' => $alamat,
                'email' => $email,
                'nama_foto' => $nama_foto,
            ];
            
            
            $exe = $mhs->insertMahasiswa($data);

            if($exe){
                echo "<script>alert('Data berhasil disimpan');window.location='home.php#biodata';</script>";
            }
            else{
                echo "<script>alert('Data gagal disimpan');window.location='home.php';</script>";
            }
?>