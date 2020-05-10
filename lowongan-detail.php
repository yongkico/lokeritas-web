<?php
session_start();

//GET Parameter
$id_lowongan = $_GET['id'];

//API Pencarian Lowongan Kerja
$curl_get = curl_init();
curl_setopt($curl_get, CURLOPT_URL, 'http://lokeritas.xyz/api-v1/low_detail.php?id_lowongan=' . $id_lowongan . '');
curl_setopt($curl_get, CURLOPT_RETURNTRANSFER, 1);
$result_get = curl_exec($curl_get);
curl_close($curl_get);

$result_get = json_decode($result_get, true);

?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lokeritas - Lowongan Kerja Disabilitas Sumatera Utara</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <?php if (isset($_SESSION["login"])) : ?>
        <!-- Navigation Bar-->
        <header id="topnav" class="defaultscroll scroll-active">

            <!-- Menu Start -->
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="index.html" class="logo">
                        <img src="images/logo-lokeritas2.png" alt="" class="logo-light" height="24" />
                        <img src="images/logo-lokeritas1.png" alt="" class="logo-dark" height="24" />
                    </a>
                </div>
                <!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="lowongan.php">Lowongan</a></li>
                        <li><a href="tips-karir.php">Tips Karir</a></li>
                        <li><a href="daftar-perusahaan.php">Daftar Perusahaan</a></li>
                        <li><a href="karyaku.php">Karyaku</a></li>
                        <li><a href="#" style="font-size: 30px">|</a></li>
                        <li class="has-submenu">
                            <a href="#"><i class="mdi mdi-account mr-2" style="color: gray; font-size:16px"></i><?= $_SESSION['nama_depan']; ?></a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="profile.php">Profil</a></li>
                                <li><a href="lamaran-dikirim.php">Lamaran dikirim</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--end navigation menu-->
                </div>
                <!--end navigation-->
            </div>
            <!--end container-->
            <!--end end-->
        </header>
        <!--end header-->
        <!-- Navbar End -->
    <?php else : ?>
        <!-- Navigation Bar-->
        <header id="topnav" class="defaultscroll scroll-active">

            <!-- Menu Start -->
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="index.html" class="logo">
                        <img src="images/logo-lokeritas2.png" alt="" class="logo-light" height="24" />
                        <img src="images/logo-lokeritas1.png" alt="" class="logo-dark" height="24" />
                    </a>
                </div>
                <!-- <div class="buy-button">
                <a href="post-a-job.html" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
            </div> -->
                <!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li><a href="lowongan.php">Cari Lowongan</a></li>
                        <li><a href="tips-karir.php">Tips Karir</a></li>
                        <li><a href="daftar-perusahaan.php">Daftar Perusahaan</a></li>
                        <li><a href="karyaku.php">Karyaku</a></li>
                        <div class="buy-button">
                            <a href="login.php" class="btn btn-primary" style="margin-right: 10px ! important">Masuk</a>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#pilihanDaftar">Daftar</a>
                        </div>
                    </ul>
                    <!--end navigation menu-->
                </div>
                <!--end navigation-->
            </div>
            <!--end container-->
            <!--end end-->
        </header>
        <!--end header-->
        <!-- Navbar End -->
    <?php endif; ?>


    <!-- Start home -->
    <section class="bg-half page-next-level" style="padding: 120px 0px 50px 0px;background: url('images/bg-2.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Detail Lowongan Pekerjaan</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- JOB DETAILS START -->
    <section class="section" style="padding:30px 0px 40px 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-info mb-3 text-dark" style="margin:0px 0px 2px 0px !important"><?php echo strtolower($result_get[0]['nama_pekerjaan']); ?></h3>
                </div>
            </div>
            <div class="row" style="margin:20px 0px 0px 0px">
                <div class="col-lg-1">
                    <img src="http://lokeritas.xyz/assets/perusahaan/<?= $result_get[0]['logo']; ?>" alt="" class="img-fluid float-left mr-md-3 mr-2 mx-auto d-block">
                </div>
                <div class="col-lg-11">
                    <h5 class="text-dark mb-3" style="margin:0px 0px 2px 0px !important"><?php echo $result_get[0]['nama_perusahaan']; ?> </h5>
                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker text-primary mr-2"></i><?php echo $result_get[0]['alamat']; ?> </p>
                </div>
            </div>

            <div class="row job-box bg-light rounded" style="margin-top: 20px">
                <div class="col-lg-3" style="margin:20px 0px 20px 0px">
                    <div class="border rounded p-4 bg-white">
                        <p class="text-muted" style="margin:0px 0px 0px 0px">Bidang</p>
                        <h6 style="font-weight: bolder" class="text-info"><?php echo $result_get[0]['sektor_perusahaan']; ?></h6>
                    </div>
                </div>
                <div class="col-lg-3" style="margin:20px 0px 20px 0px">
                    <div class="border rounded p-4 bg-white">
                        <p class="text-muted" style="margin:0px 0px 0px 0px">Jenis Disabilitas</p>
                        <h6 style="font-weight: bolder" class="text-info">Semua Jenis Disabilitas</h6>
                    </div>
                </div>
                <div class="col-lg-3" style="margin:20px 0px 20px 0px">
                    <div class="border rounded p-4 bg-white">
                        <p class="text-muted" style="margin:0px 0px 0px 0px">Tanggal di Posting</p>
                        <h6 style="font-weight: bolder" class="text-info"><?php echo date("d F Y", strtotime($result_get[0]['buka'])); ?> </h6>
                    </div>
                </div>
                <div class="col-lg-3" style="margin:20px 0px 20px 0px">
                    <div class="border rounded p-4 bg-white">
                        <p class="text-muted" style="margin:0px 0px 0px 0px">Tanggal Berakhir</p>
                        <h6 style="font-weight: bolder" class="text-info"><?php echo date("d F Y", strtotime($result_get[0]['tutup'])); ?> </h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7">

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-muted mt-4">Deskripsi Pekerjaan :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="job-detail border rounded mt-2 p-4 bg-light" style="box-shadow: 1px 2px 4px 1px #e1e0e0;">
                                <div class="job-detail-desc">
                                    <p class="text-dark mb-3"><?php echo $result_get[0]['detail']; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-muted mt-4">Tugas :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4 bg-light" style="box-shadow: 1px 2px 4px 1px #e1e0e0;">
                                <div class="job-detail-desc">
                                    <ul style="list-style-type: none; padding:0px 0px 0px 0px">
                                        <li class="mdi mdi-chevron-right text-dark"> Menjahit untuk produk Kakha Series</li>
                                        <li class="mdi mdi-chevron-right text-dark"> Menjahit untuk produk Kakha Series</li>
                                        <li class="mdi mdi-chevron-right text-dark"> Menjahit untuk produk Kakha Series</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-muted mt-4">Persyaratan :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4 bg-light" style="box-shadow: 1px 2px 4px 1px #e1e0e0;">
                                <div class="job-detail-desc">
                                    <ul style="list-style-type: none; padding:0px 0px 0px 0px">
                                        <?php echo $result_get[0]['kriteria_umum']; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0" style="margin:70px 0px 0px 0px !important">
                    <div class="job-detail border rounded p-4 bg-light" style="box-shadow: 1px 2px 4px 1px #e1e0e0;">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-city mr-2"></i>Deskripsi Perusahaan</h5>

                        <div class="job-detail-location pt-4 border-top">
                            <div class="job-details-desc-item">
                                <p class="text-dark mb-2"><?php echo $result_get[0]['deskripsi']; ?> </p>
                            </div>
                        </div>
                    </div>

                    <div class="job-detail border rounded mt-4 p-4 bg-light" style="box-shadow: 1px 2px 4px 1px #e1e0e0;">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-share-variant mr-2"></i>Bagikan</h5>

                        <div class="job-detail-time border-top pt-4 ">
                            <ul class="social-icon list-inline mt-3 mb-0 text-center">
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="job-detail border rounded mt-4">

                        <?php if (isset($_SESSION["login"])) : ?>
                            <button style="width:100%" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalku"><i class="mdi mdi-send mr-2" style="color: white; font-size:16px"></i>Kirim Lamaran</button>


                            <!-- The Modal -->
                            <div class="modal fade" id="modalku">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="width: 600px">
                                        <!-- Ini adalah Bagian Header Modal -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Unggah Berkas lamaran</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Ini adalah Bagian Body Modal -->
                                        <div class="modal-body">
                                            <form>
                                                <p style="margin:0px 0px 0px 0px">Silahkan unggah berkas lamaran anda</p>
                                                <span class="text-danger" style="font-size: 14px;">* Unggah berkas lamaran yang akan dikirim harus dalam bentuk .docx, .rar atau .zip dan ukuran berkas tidak lebih dari 1.5MB</span><br>
                                                <input type="file" name="file-lamaran" id="file-lamaran" style="margin-top: 18px"><br><br>
                                                <label class="text-info rounded">Atau</label> <br>
                                                <span style="padding:10px 10px 10px 0px"> Tulis lamaran anda !</span>
                                                <textarea name="lamaran" class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                                            </form>
                                        </div>

                                        <!-- Ini adalah Bagian Footer Modal -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Kirim</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- The End Modal -->
                        <?php else : ?>
                            <button onclick="loginEx();" style="width:100%" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalku"><i class="mdi mdi-send mr-2" style="color: white; font-size:16px"></i>Kirim Lamaran</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB DETAILS END -->


    <!-- The Modal Daftar -->
    <div class="modal" id="pilihanDaftar">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Daftar</h4>
                    <button type="button" class="close btnClose" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 bg-info rounded" style="padding:50px 50px 50px 50px;border:7px solid white">
                                <p class="text-white" style="font-size: 24px;text-align:center">Sebagai Penyandang Disabilitas Pencari Kerja</p>
                                <p style="text-align: center;margin-top:30px"><a href="daftar-disabilitas.php" class="btn btn-light btn-lg" style="margin-right: 10px ! important">Daftar</a></p>
                            </div>
                            <div class="col-lg-6 bg-warning rounded" style="padding:50px 50px 50px 50px;border:7px solid white">
                                <p class="text-white" style="font-size: 24px;text-align:center">Sebagai Penyedia Kerja Penyandang Disabilitas</p>
                                <p style="text-align: center;margin-top:30px"><a href="daftar-penyedia-kerja.php" class="btn btn-light btn-lg" style="margin-right: 10px ! important">Daftar</a></p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Ubah Foto Profil -->

    <!-- footer start -->
    <footer class="footer" style="padding: 40px 0px 10px 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="#" class="logo">
                        <img src="images/logo-lokeritas2.png" alt="" class="logo-light" height="38" />
                    </a>
                    <p class="mt-4">Lokeritas adalah media penyedia lowongan kerja khusus penyandang disabilitas di Sumatera Utara</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Lokeritas</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="tentang.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> Tentang</a></li>
                        <li><a href="mitra.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> Mitra</a></li>
                        <li><a href="hubungi-kami.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> Hubungi Kami</a></li>
                        <li><a href="kebijakan-privasi.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> Kebijakan Privasi</a></li>
                        <li><a href="faq.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Penyedia Kerja</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="daftar-penyedia-kerja.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> Mendaftar</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right" disabled></i> Lihat Daftar Kandidat</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pasang Iklan Lowongan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Lainnya</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="tips-karir.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> Tips Karir</a></li>
                        <li><a href="karyaku.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> Karyaku</a></li>
                        <li><a href="lowongan.php" class="text-foot"><i class="mdi mdi-chevron-right"></i> Lowongan Terbaru</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Unduh Aplikasi Mobile Lokeritas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">©2020 Design with <i class="mdi mdi-heart text-danger"></i> by Stucklabs.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    <!-- javascript -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function loginEx() {
            swal("Perhatian!", "Anda harus masuk terlebih dahulu!", "warning");
        }
    </script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="assets/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('lamaran');
    </script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>

</body>

</html>