<?php
    require_once "class/jurusan_class.php";
    require_once "class/mahasiswa_class.php";
    $nim = $_GET['nim'];
    $nim=['nim'=>$nim];
    $exe = $mhs->getNim($nim);
    $data = mysqli_fetch_assoc($exe);
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
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
        <title>form edit</title>
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
        <nav class="navbar navbar-expand-lg sticky-top bg-success" data-bs-theme="dark">
            <div class="container-fluid">
                <span class="navbar-brand mx-3">
                    <img
                        src="logo form white.png"
                        alt=""
                        width="40"
                        height="50"
                        class="d-inline-block align-text-top"></span>
                <p class="my-1 fs-4 fw-bold text-light">Form Biodata Mahasiswa</p>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mx-md-2-text-start ms-auto mb-2 mb-lg-0 fs-5 ">
                        <li class="nav-item">
                            <a
                                class="nav-link active mx-4"
                                aria-current="page"
                                href="http://localhost/spba214/database/home.php#biodata">kembali</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- form -->
        <div class="form" style="text-align:justify">
            <h2>Lengkapi Biodata Dengan Benar !</h2>
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>
                        <p>edit biodata</p>
                    </legend>
                    <table class="table table-bordered border-success border border-3">
                        <tr>
                            <td>NIM (Nomor Induk Mahasiswa)</td>
                            <td><input
                                class="form-control w-50 border-success"
                                type="number"
                                name="nim"
                                readonly="readonly"
                                value="<?=$data['nim']?>"></td>
                        </tr>
                        <tr>
                            <td>Nama Mahasiswa</td>
                            <td><input
                                class="form-control w-50 border-success"
                                type="text"
                                name="nama"
                                value="<?=$data['nama_mhs']?>"></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>
                                <select class="form-control w-50 border-success" name="jurusan">
                                    <?=$jrs->selectJurusan($data['kode_jurusan'])?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <?=$mhs->selectedGender($data)?>
                            </td>
                        </tr>
                        <tr>
                            <td>No Hp</td>
                            <td><input
                                class="form-control w-50 border-success"
                                type="tel"
                                name="no hp"
                                value="<?=$data['no_hp']?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input
                                class="form-control w-50 border-success"
                                type="text"
                                name="alamat"
                                value="<?=$data['alamat']?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input
                                class="form-control w-50 border-success"
                                type="email"
                                name="email"
                                value="<?=$data['email']?>"></td>
                        </tr>
                        <tr>
                            <td>Foto Profile</td>
                            <td>

                                <input
                                    class="form-control w-50 border-success"
                                    type="file"
                                    name="nama foto"
                                    value="<?=$data['nama_foto']?>">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td >
                                <input class="btn btn-success mx-1" type="submit" name="simpan">
                                <input class="btn btn-success mx-1" type="reset" value="Reset">
                            </td>

                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </body>
</html>