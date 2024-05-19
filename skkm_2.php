<?php
require_once "class/skkm_class.php";
require_once "class/user_class.php";
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
        <title>Document</title>
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
                            <a class="nav-link active mx-1" aria-current="page" href="#2">Data SKKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-1" aria-current="page" href="http://localhost/spba214/database/home.php">Kembali</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="1" class="form mt-3 text-capitalize">
            <h2>Input Sertifikat</h2>
            <form action="insert_skkm_2.php" method="POST" enctype="multipart/form-data">
                <table class="table table-bordered border-success border border-3">
                    <tr class="">
                        <td>
                            <label class="fw-bold ">NIM</label>
                            <br>
                            (Nomor Induk Mahasiswa)
                        </td>
                        <td colspan="2" class="text-center">
                            <input
                                class="form-control w-50 border-success my-1"
                                placeholder="Masukan NIM Disini"
                                type="number"
                                name="nim"
                                value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold">SKKM wajib</label>
                        </td>
                        <td>
                            <select name="wajib" class="form-control w-75 border-success my-3">
                                <option name="">Pilih Kegiatan</option>
                                <option value="kulindus">Kuliah Industri</option>
                                <option value="karya_tulis">Karya Tulis</option>
                                <option value="keanggotaan">Keanggotaan ORMAWA</option>
                                <option value="gmti">G.M.T.I</option>
                                <option value="dies">Dies Natalis</option>
                            </select>
                        </td>
                        <td>
                            <label class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success text-center"
                                type="number"
                                name="jmlh wajib"
                                id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold mb-2" name="akademik">SKKM Pilihan Bidang Akademik & Ilmiah</label>
                        </td>
                        <div class="row">
                            <td class="column">
                                <select name="pilihan" id="" class="form-control w-75 border-success my-2">
                                    <option>Pilih Kegiatan</option>
                                    <option value="konfrensi">Konfrensi</option>
                                    <option value="penelitian">Penelitian</option>
                                    <option value="seminar">Seminar</option>
                                    <option value="kulindus">Kuliah Industri</option>
                                    <option value="panitia">Kepanitian</option>
                                </select>
                                <select name="tingkatan" id="" class="form-control w-75 border-success my-2">
                                    <option>Pilih Tingkatan</option>
                                    <option value="1">Perguruan Tinggi</option>
                                    <option value="2">Regional</option>
                                    <option value="3">Nasional</option>
                                    <option value="4">Internasional</option>
                                </select>
                            </td>
                        </div>
                        <td>
                            <label class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success text-center"
                                type="number"
                                name="jmlh akademik"
                                id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold mb-2" name="minat">SKKM Pilihan Bidang Minat Bakat, Seni dan Olahraga</label>
                        </td>
                        <td>
                            <select name="pilihan2" id="" class="form-control w-75 border-success my-2">
                                <option>Pilih Kegiatan</option>
                                <option value="lomba">Lomba</option>
                                <option value="pentas">Festival, Pentas Seni/Musik dan Olahraga</option>
                                <option value="panitia2">Kepanitiaan</option>
                            </select>
                            <select name="tingkatan2" id="" class="form-control w-75 border-success my-2">
                                <option>Pilih Tingkatan</option>
                                <option value="1">Perguruan Tinggi</option>
                                <option value="2">Regional</option>
                                <option value="3">Nasional</option>
                                <option value="4">Internasional</option>
                            </select>
                        </td>
                        <td>
                            <label class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success text-center"
                                type="number"
                                name="jmlh minat"
                                id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold mb-2" name="organisasi">SKKM Pilihan Bidang Organisasi & Pengabdian Masyarakat</label>
                        </td>
                        <td>
                            <select name="pilihan3" id="" class="form-control w-75 border-success my-2">
                                <option>Pilih Kegiatan</option>
                                <option value="bb">BEM/BALMA</option>
                                <option value="hima">HIMAPRODI/HIMAS/PKM/UKM</option>
                                <option value="pm">PM/BAKSOS</option>
                                <option value="panitia3">Kepanitiaan</option>
                            </select>
                            <select name="tingkatan3" id="" class="form-control w-75 border-success my-2">
                                <option>Pilih Tingkatan</option>
                                <option value="1">Perguruan Tinggi</option>
                                <option value="2">Regional</option>
                                <option value="3">Nasional</option>
                                <option value="4">Internasional</option>
                            </select>
                        </td>
                        <td>
                            <label class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success text-center"
                                type="number"
                                name="jmlh organisasi"
                                id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold">Skkm lain-lain</label><br>
                            <p class="form-text fs-7">*Khusus mahasiswa kelas karyawan</p>
                        </td>
                        <td>
                            <select name="lain lain" class="form-control w-75 border-success my-3">
                                <option value="">Pilih Kegiatan</option>
                                <option value="panitia2">Kepanitiaan</option>
                                <option value="lomba">Lomba</option>
                                <option value="anggota">Keanggotaan ORMAWA</option>
                            </select>
                        </td>
                        <td>
                            <label class="mb-2 ms-1">Jumlah Sertifikat</label>
                            <input
                                class="form-control w-50 border-success text-center"
                                type="number"
                                name="jmlh lain"
                                id="">
                        </td>
                    </tr>
                </table>
                <div class="text-center">
                    <input class="btn btn-success mx-1" type="submit" name="submit">
                    <input class="btn btn-success mx-1" type="reset" name="reset">
                </div>
            </form>

            <h2 id="2" class="mt-3">Data SKKM Mahasiswa</h2>
            <table
                class="table border-success border border-2 table-striped-columns table-hover"
                style="text-align:center">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>skkm wajib</th>
                        <th>skkm pilihan</th>
                        <th>skkm lain-lain</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                $exe = $skm->tabelSkkm();
                while($data = mysqli_fetch_assoc($exe)){
                ?>
                    <tr>
                        <td class="col"><?=$data['nim']?></td>
                        <td class="col"><?=$data['nama_mhs']?></td>
                        <td class="col"><?= $data['skkm_wajib']?></td>
                        <td class="col"><?= $data['skkm_pilihan']?></td>
                        <td class="col"><?= $data['skkm_lain']?></td>
                        <td>
                            <form action="skkm_2.php?nim=<?=$data['nim']?>" method="$_GET">
                                <input type="hidden" name="nim" value="<?=$data['nim']?>">
                                <button class="btn btn-success" type="submit">Input SKKM</button>
                            </form>
                        </td>
                        <td>
                            <a href="tambah_skkm2.php?nim=<?=$data['nim']?>">
                                <button class="btn btn-success">Tambah SKKM</button>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </body>
</html>