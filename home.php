<?php
require_once "class/mahasiswa_class.php";
require_once "class/jurusan_class.php";
require_once "class/user_class.php";
//access 
$usr->access();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
            crossorigin="anonymous">
        <scrip
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <title>home</title>
    </head>

    <style>
        body {
            text-align: center;
            text-transform: capitalize;
            background-color: whitesmoke;
        }

        h2 {
            color: green;
        }

        .form {
            margin: 10px 40px;

        }
    </style>

    <body>
        <!-- navigation -->
        <?php include "navbar/navbar.php"; ?>

        <!-- form -->
        <div id="forms" class="form" style="text-align:justify">
            <h2>Lengkapi Biodata Dengan Benar !</h2>
            <form action="proses_insert.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>
                        <p>input biodata</p>
                    </legend>
                    <table class="table table-bordered border-success border border-3">
                        <tr>
                            <td class="px-auto">NIM (Nomor Induk Mahasiswa)</td>
                            <td><input class="form-control w-50 border-success" type="number" name="nim" id=""></td>
                        </tr>
                        <tr>
                            <td>Nama Mahasiswa</td>
                            <td><input class="form-control w-50 border-success" type="text" name="nama" id=""></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>
                                <select class="form-control w-50 border-success" name="jurusan" id="">
                                    <option >Pilih Jurusan</option>
                                    <?=$jrs->jurusan()?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <input class="form-check-input mx-2" type="radio" name="gender" value="1">Laki-Laki
                                <input class="form-check-input mx-2" type="radio" name="gender" value="0">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>No Hp</td>
                            <td><input class="form-control w-50 border-success" type="tel" name="no hp" id=""></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input class="form-control w-50 border-success" type="text" name="alamat" id=""></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input class="form-control w-50 border-success" type="email" name="email" id=""></td>
                        </tr>
                        <tr>
                            <td>Foto Profile</td>
                            <td>
                                <input class="form-control w-50 border-success" type="file" name="nama foto">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td >
                                <input class="btn btn-success mx-1" type="submit" name="submit">
                                <input class="btn btn-success mx-1" type="reset" value="Reset">
                            </td>

                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>

        <h2 id="biodata">Biodata Mahasiswa</h2>
        <table
            class="table border-success border border-3 table-striped-columns table-hover">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Gender</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $exe = $mhs->tableMhs();
                while($data = mysqli_fetch_assoc($exe)){
                ?>
                <tr>
                    <td class="col"><?=$data['nim']?></td>
                    <td class="col"><?= $data['nama_mhs']?></td>
                    <td class="col"><?= $data['nama_jurusan']?></td>
                    <td class="col"><?= $data['gender']==1?'Laki Laki':'Perempuan'?></td>
                    <td class="col"><?= $data['no_hp']?></td>
                    <td class="col"><?= $data['alamat']?></td>
                    <td class="col"><?= $data['email']?></td>
                    <td>
                        <a href="uploud/<?= htmlspecialchars($data['nama_foto']) ?>" target="blank">
                            <img
                                50="50"
                                src="uploud/<?= htmlspecialchars($data['nama_foto']) ?>"
                                alt="none"
                                width="50"
                                height="height">
                        </td>
                        <td>
                            <a href="edit.php?nim=<?=$data['nim']?>">
                                <button class="btn btn-success">Edit</button>
                            </a>
                            <a href="delete.php?nim=<?=$data['nim']?>">
                                <button class="btn btn-success">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </body>
    </html>