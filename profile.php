<?php
session_start();
require("functions.php");


?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobya - Responsive Job Board HTML Template</title>
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
        <?php
        $id = $_SESSION["id"];
        $result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
        $row = mysqli_fetch_assoc($result);
        ?>
        <!-- Navigation Bar-->
        <header id="topnav" class="defaultscroll scroll-active">

            <!-- Menu Start -->
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="index.html" class="logo">
                        <img src="images/logo-lokeritas-light.png" alt="" class="logo-light" height="18" />
                        <img src="images/logo-lokeritas-dark.png" alt="" class="logo-dark" height="18" />
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
                            <a href="#"><i class="mdi mdi-account mr-2" style="color: gray; font-size:16px"></i><?= $row["nama"]; ?></a><span class="menu-arrow"></span>
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
                        <img src="images/logo-light.png" alt="" class="logo-light" height="18" />
                        <img src="images/logo-dark.png" alt="" class="logo-dark" height="18" />
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
                        <li><a href="contact.html">Cari Lowongan</a></li>
                        <li><a href="index.html">Tips Karir</a></li>
                        <li><a href="contact.html">Daftar Perusahaan</a></li>
                        <li><a href="index.html">Karyaku</a></li>
                        <div class="buy-button">
                            <a href="login.php" class="btn btn-primary">Masuk</a>
                            <a href="register.php" class="btn btn-primary">Daftar</a>
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
    <section class="bg-half page-next-level" style="padding:100px 0px 30px 0px;background: url('https://www.expatica.com/app/uploads/2018/11/Networking-1-1920x1080.jpg') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="https://s2.bukalapak.com/img/7620068213/w-1000/CETAK_FOTO_dan_PAS_FOTO_.png" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                        <h5 class="text-white mb-2">Michael Brown</h5>
                        <p style="color: white;">"Hambatan yang saya alami adalah saya susah berjalan atas musibah yang saya alami Hambatan yang saya alami adalah saya susah berjalan atas musibah yang saya alami"</p>
                        <span class="badge badge-secondary" style="font-size: 15px;padding:10px 10px 10px 10px"> PHP Developer </span>
                        <p style="color: white;margin-top:10px;">samsul@gmail.com &nbsp;|&nbsp; 081212120098 </p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- CANDIDATES PROFILE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-dark">About Us :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                        <p class="text-muted">Aliquam erat volutpat Etiam vitae tortor Morbi vestibulum volutpat enim Aliquam nunc Nunc sed turpis sed mollis eros et ultrices tempus mauris ipsum aliquam libero non adipiscing dolor urna a orci Nulla porta dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos hymenaeos pellentesque dapibus hendrerit tortor Praesent egestas tristique nibh sed a libero cras us varius donec vitae orci sed dolor rutrum auctor fusce egestas elit eget lorem.</p>

                        <p class="text-muted">Libero venenatis faucibus ullam quis ante tiam sit amet orci eget eros faucibus tincidunt ed fringilla mauris sit amet nibh Donec sodales sagittis magna ed consequat leo eget bibendum sodales augue velit cursus nunc quis gravida magna mi libero usce vulputate eleifend sapien estibulum purus qua scelerisque ut mollis sed nonummy id metus ullam accumsan lorem Vivamus elementum semper enean vulputate eleifend tellus enean leo ligula porttitor.</p>

                        <ul class="list-inline pt-3 border-top mb-0">
                            <li class="list-inline-item mr-3">
                                <a href="" class="text-muted f-15 mb-0"><i class="mdi mdi-map-marker mr-2"></i>3659 Turkey Pen Road Manhattan, NY 10016</a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="" class="text-muted f-15 mb-0"><i class="mdi mdi-web mr-2"></i>Www.webthemes.co.in</a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="" class="text-muted f-15 mb-0"><i class="mdi mdi-email mr-2"></i>Webthemes.ltd@gmail.com</a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="" class="text-muted f-15 mb-0"><i class="mdi mdi-cellphone-iphone mr-2"></i>123 456 7890</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Overview :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                        <div class="job-detail-desc">
                            <p class="text-muted f-14 mb-3">Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus Aenean leo ligula porttitor eu consequat vitae eleifend ac enim aliquam lorem ante dapibus in viverra quis feugiat a tellus phasellus viverra nulla ut metus variuse laoreet quisque rutrum aenean imperdiet etiam ultricies nisi that is maecenas tempus tini tellus eget condimentum rhoncus sem semper libero sit amet adipiscing sem neque sed ipsum nam quam nunc blandit vel luctus pulvinar hendrerit lorem maecenas nec odio et ante tincidunt tempus donec vitae libero venenatis faucibus nullam quis ante etiam sit amet orci eget eros faucibus tincidunt Duis leo Sed fringilla a mauris sit amet nibh donec sodales sagittis magna vel augue curabitur ullamcorper ultricies nisi nam eget dui etiame rhoncus ut enim as minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid commodi.</p>

                            <p class="text-muted f-14 mb-0">Sed consequat eget bibendum augue cursus nunc quis gravida magna mi a Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat liber fusce vulputate eleifend sapien vestibulum purus quam scelerisque ut mollis sed nonummy id metus nullam accumsan lorem in dui cras ultricies mi eu turpis hendrerit fringilla vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia in dui quis consectetuer lacinia nam pretium turpis arcu duis arcu tortor.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Education :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-school"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2016 - April 2017</p>
                        <p class="pb-3 mb-0">Diploma In Management Studies</p>

                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-library"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2017 - April 2018</p>
                        <p class="pb-3 mb-0">Diploma In Management</p>

                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-briefcase-check"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2018 - April 2019</p>
                        <p class="pb-3 mb-0">Management Of Company</p>

                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Experience :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Web Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $950</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i>www.webthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>1919 Ward Road West Nyack, NY 10994</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Web code Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">Web Developer</p>
                                    <p class="text-muted mb-0 f-16">Fab 2015 - July 2018</p>
                                    <p class="text-muted mb-0 f-16">Salary : $1100</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i>www.webcodeltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-5.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Brand Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $1000</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i>www.brandthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Small Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $900</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i>www.smallthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Skills :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-4 pt-2">
                    <h6 class="mb-0 text-uppercase">Language Knowledge :</h6>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Spanish</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:84%;">
                                <div class="progress-value d-block text-muted h6">84%</div>
                            </div>
                        </div>
                    </div>
                    <!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Japanese</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:75%;">
                                <div class="progress-value d-block text-muted h6">75%</div>
                            </div>
                        </div>
                    </div>
                    <!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Arabic</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:79%;">
                                <div class="progress-value d-block text-muted h6">79%</div>
                            </div>
                        </div>
                    </div>
                    <!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">English</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:95%;">
                                <div class="progress-value d-block text-muted h6">95%</div>
                            </div>
                        </div>
                    </div>
                    <!--end process box-->
                </div>

                <div class="col-md-6 mt-4 pt-2">
                    <h6 class="mb-0 text-uppercase">Coding Expertise :</h6>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">WordPress</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:84%;">
                                <div class="progress-value d-block text-muted h6">84%</div>
                            </div>
                        </div>
                    </div>
                    <!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">PHP / MYSQL</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:75%;">
                                <div class="progress-value d-block text-muted h6">75%</div>
                            </div>
                        </div>
                    </div>
                    <!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Angular / JavaScript</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:79%;">
                                <div class="progress-value d-block text-muted h6">79%</div>
                            </div>
                        </div>
                    </div>
                    <!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">HTML / CSS</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:95%;">
                                <div class="progress-value d-block text-muted h6">95%</div>
                            </div>
                        </div>
                    </div>
                    <!--end process box-->
                </div>
            </div>
        </div>
    </section>
    <!-- CANDIDATES PROFILE END -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/logo-light.png" height="20" alt=""></a>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissim os ducimus qui blanditiis praesentium</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Company</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Media & Press</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Career</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Marketing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> CEOs </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Agencies</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Our Apps</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Resources</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Support</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Monday - Friday : 9:00 to 17:00</li>
                        <li class="mt-2">Saturday : 10:00 to 15:00</li>
                        <li class="mt-2">Sunday : Day Off (Holiday)</li>
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
                        <p class="mb-0">© 2019 -2020 Jobya. Design with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</p>
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
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>
</body>

</html>