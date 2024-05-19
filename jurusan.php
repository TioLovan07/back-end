<?php
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
                            <li class="nav-item">
                                <a
                                    class="nav-link active mx-1"
                                    aria-current="page"
                                    href="http://localhost/spba214/database/home.php#">Kembali</a>
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
                action="proses_insert_jurusan.php"
                method="POST"
                enctype="multipart/form-data">
                <fieldset>
                    <legend>
                        <p>form jurusan</p>
                    </legend>
                    <table class="table table-bordered border-success border border-2">
                        <tr>
                            <td>kode jurusan</td>
                            <td><input class="form-control w-50 border-success" type="text" name="kode_jurusan" id=""></td>
                        </tr>
                        <tr>
                            <td>Nama jurusan</td>
                            <td><input class="form-control w-50 border-success" type="text" name="nama" id=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class="btn btn-success mx-1" type="submit" name="submitJur" value="Submit">
                                <input class="btn btn-success mx-1" type="reset" value="Reset">
                            </td>

                        </tr>
                    </table>
                </fieldset>
            </form>

            <h2>jurusan tersedia</h2>
            <table class="table border-success border border-2 table-striped-columns table-hover" style="text-align:center">
                <thead>
                    <tr>
                        <th>kode jurusan</th>
                        <th>nama Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $exe = $jrs->tableJurusan();
                        while($data = mysqli_fetch_assoc($exe)){
                        ?>
                    <tr>
                        <td class="col"><?= $data['kode_jurusan']?></td>
                        <td class="col"><?= $data['nama_jurusan']?></td>
                        <td>
                            <a href="edit_jurusan.php?kode_jurusan=<?=$data['kode_jurusan']?>">
                                <button class="btn btn-success">Edit</button>
                            </a>
                            <a href="delete_jurusan.php?kode_jurusan=<?=$data['kode_jurusan']?>">
                                <button class="btn btn-success">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </body>
</html>