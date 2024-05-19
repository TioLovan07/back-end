<?php
    require_once "class/jurusan_class.php";
    $kode_jurusan = $_GET['kode_jurusan'];
    $kode_jurusan=['kode_jurusan'=>$kode_jurusan];
    $exe = $jrs->getJurusan($kode_jurusan);
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
        <title>jurusan</title>
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
        <div>
            <!-- navigation -->
            <nav
                class="navbar navbar-expand-lg sticky-top bg-success"
                data-bs-theme="dark"
                >
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
                            <li><a 
                                    class="nav-link active mx-4"
                                    aria-current="page"
                                    href="http://localhost/spba214/database/jurusan.php">Back</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- form -->
        <div class="form" style="text-align:justify">
            <h2>Lengkapi data Dengan Benar !</h2>
            <form
                action="up_jurusan.php"
                method="POST"
                enctype="multipart/form-data">
                <fieldset>
                    <legend>
                        <p>form edit jurusan</p>
                    </legend>
                    <table class="table table-bordered border-success border border-2">
                        <tr>
                            <td>kode jurusan</td>
                            <td><input class="form-control w-50 border-success" type="text" name="jurusan" readonly value="<?= $data['kode_jurusan']?>"></td>
                        </tr>
                        <tr>
                            <td>Nama jurusan</td>
                            <td><input class="form-control w-50 border-success" type="text" name="nama" value="<?= $data['nama_jurusan']?>"></td>
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