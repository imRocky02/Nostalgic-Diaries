<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Nostalgia Diaries</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/fav-icon.jpeg" rel="icon">
    <link href="../assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   
    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!--  Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">



</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top " style="background-color: rgb(17, 11, 11);">
        <div class="container d-flex align-items-center justify-content-lg-between" style="height: 50px;">

           
            <a href="index.php" class="logo me-auto me-lg-0"><img src="../assets/img/logo.png" alt="ND" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>

                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                
                <a href="logout.php" class="nav-link scrollto">LOGOUT</a>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <br><br><br>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services" style="background-color: #cbc1fa;">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Hello Nostaliiii...!!!!</h2>
            <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="1"><img src="../assets/img/Icons/love3.png" alt="" srcset="" height="80px" width="80px"></div>
                    <h4><a href="https://srishtygrover.wordpress.com/category/mixed-bag/college-memories/" target=" ">Most Loved</a></h4>
                    <p>The Memories that are the most liked or loved by the our nostalgiiii</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                <div class="1"><img src="../assets/img/Icons/love1.png" alt="" srcset="" height="80px" width="80px"></div>
                    <h4><a href="https://www1.chester.ac.uk/news/college-memories" target=" ">Most Commented</a></h4>
                    <p>Most commented or thinked or reacted as thoughts by the our nostalgiiiis</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                <div class="1"><img src="../assets/img/Icons/love2.png" alt="" srcset="" height="100px" width="100px"></div>
                    <h4><a href="http://www.allstudyx.com/blog/college-life-memories-last-forever/" target=" ">Todays Most Loved</a></h4>
                    <p>Todays love by our nostalgiiiis on the memories ....... &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                <div class="1"><img src="../assets/img/Icons/love4.png" alt="" srcset="" height="100px" width="100px"></div>
                    <h4><a href="https://thoughtcatalog.com/lindsay-detwiler/2017/06/on-holding-on-to-the-best-moments-of-college-life/" target=" ">Most Loved in Last 1 Year </a></h4>
                    <p>The Memories that are the most liked or loved by the our nostalgiiii in last one year</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                <div class="1"><img src="../assets/img/Icons/love5.png" alt="" srcset="" height="100px" width="100px"></div>
                    <h4><a href="https://collegeuncovered.wixsite.com/blog/post/these-college-memories-will-make-your-day" target=" ">Most Loved in Last 1 Month</a></h4>
                    <p>The Memories that are the most liked or loved by the our nostalgiiii in last one month</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                <div class="1"><img src="../assets/img/Icons/love6.png" alt="" srcset="" height="100px" width="100px"></div>
                    <h4><a href="http://collegememorieswithbesties.blogspot.com/" target=" ">Most Viewed</a></h4>
                    <p>The Memories that are the most viewed by the our nostalgiiiis</p>
                </div>
            </div>

        </div>

    </div>
</section>








   

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>NOSTALGIA DIARIES<span>.</span></h3>
                            <p> contact us on: <br>
                                <strong>Email:</strong> nostalgiadiarieshelp@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://mobile.twitter.com/Nostalgia_Diary" target=" " class="twitter"><i class="bx bxl-twitter"></i></a>
                                <!--<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--->
                                <a href="https://www.instagram.com/nostalgiadiary_/" target=" " class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDMmzWZwlnkFVLDKrlsMHTtfZFkBnTbRsVxnVGxdRfpBhrbwGPSWxTnhMNWnWcJTJZGV " target=" " class="google-plus"><i class="bx bxl-google"></i></a>
                                <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>--->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                  

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Your Reviews</h4>
                        <p>Please share your experience with us and your suggestions also :</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Share">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span> <a href="index.php"> Nostalgia Diaries</a></span></strong>. All Rights Reserved
            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->







    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->

    <script src="../assets/js/main.js"></script>

</body>

</html>