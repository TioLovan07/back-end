<?php
    include "koneksi.php";
    //include "function.php";
    $nim = $_GET['nim'];
    $qry = "SELECT * FROM skkm WHERE nim = '$nim'";
    $exe = mysqli_query($con,$qry);
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
        <scrip
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    <title>skkm</title>
</head>
<style>
        body {
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
                            <a class="nav-link active mx-1" aria-current="page" href="skkm.php">Kembali</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="1" class="form mt-3 text-capitalize">
            <h2>Input Sertifikat</h2>
            <form action="update_skkm.php" method="POST" enctype="multipart/form-data">
                <table class="table table-bordered border-success border border-3">
                    <tr>
                        <td>
                            <label class="fw-bold">NIM</label>
                            <br>
                            (Nomor Induk Mahasiswa)
                        </td>
                        <td class="">
                            
                            <input class="form-control w-50 border-success my-1" type="number" readonly name="nim" value="<?=$data['nim']?>">
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold">Bidang Akademik</label>
                            <br>
                            (Konfrensi, Penelitian, Seminar, Kuliah Industri, Kepanitiaan)
                        </td>
                        <td>
                            <label for="kegiatan" class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success "
                                type="number" 
                                name="akademik"
                                id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold">Bidang Minat Bakat</label>
                            <br>
                            (Lomba, Festival, Pentas Seni dan Olahraga,Kepanitiaan)
                        </td>
                        <td>
                            <label for="kegiatan" class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success "
                                type="number"
                                
                                name="minat"
                                id="">
                        </td>
                    </tr>
                    <tr>
                        <td> <label class="fw-bold">Bidang Organisasi dan Sosial</label>
                            <br>
                            (BEM/BALMA, HIMAPRODI/HIMAS, PKM/UKM, PM/BAKSOS, Kepanitiaan)
                        </td>
                        <td>
                            <label for="kegiatan" class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success "
                                type="number"
                                
                                name="organisasi"
                                id="">
                        </td>
                    </tr>
                    <tr>
                        <td> <label class="fw-bold">Bidang Kegiatan Wajib</label>
                            <br>
                            (G.M.T.I, Jalan Santai, Pentas Musik)
                        </td>
                        <td>
                            <label for="kegiatan" class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success "
                                type="number"
                                
                                name="wajib"
                                id="">
                        </td>
                    </tr>
                </table>
                <div class="text-center">
                    <input class="btn btn-success mx-1" type="submit" name="submit">
                    <input class="btn btn-success mx-1" type="reset" name="reset">
                </div>
            </form>

            
        </div>
</body>
</html>