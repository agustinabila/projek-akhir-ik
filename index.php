<?php 
    include "php/connect.php";

    session_start();

    if(!isset($_SESSION['username'])){
        header ("php/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Iron Style</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Icon Tiktok -->
        <script src="https://code.iconify.design/iconify-icon/1.0.3/iconify-icon.min.js"></script>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>8:00 - 20:00</h2>
                                <p>Buka Setiap Hari</p>
                            </div>
                            <div class="text">
                                <h2>+62 892134678923</h2>
                                <p>Hubungi kami untuk info lebih lanjut</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><span>Iron </span>Style</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="price.php" class="nav-item nav-link">Price</a>
                        <a href="team.php" class="nav-item nav-link">Barber</a>
                        <a href="portfolio.php" class="nav-item nav-link">Gallery</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Acount</a>
                            <div class="dropdown-menu">
                                <a href="php/login.php" class="dropdown-item">Login</a>
                                <a href="php/account.php" class="dropdown-item">Akun Anda</a>
                                <a href="php/booking.php" class="dropdown-item">Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1 style="font-family: 'Poppins', sans-serif;">Boost Your Confidence
                            </h1>
                            <p>
                                Iron Style Barbershop, tempat cukur dengan barber profesional bersertifikat. Beragam paket cukur dan shaving tersedia dengan harga afordable. Cukur gaya apa saja sesuai request atau konsultasikan style terbaikmu dengan barber kamu. See you guys!
                            </p>
                            <a class="btn" href="https://htmlcodex.com/barber-shop-template">Booking Sekarang</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="img/hero.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Learn About Us</p>
                            <h2>Ribuan Pengalaman Profesional</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Iron Style Barbershop berdiri sejak tahun 2022. Didirikan bersama-sama dalam satu misi yaitu kepuasan dan kenyamanan pelanggan. Disini kami membangun Barbershop bersama dengan tenaga profesional yang bersertifikat. Hal ini kami lakukan sesuai dengan misi kami. Dengan mempertahankan kualitas pada Barbershop kami.
                            </p>
                            <p>
                                Kami terus berinovasi dan berkembang mengikuti trend perkembangan zaman. 
                                Sehingga diharapkan para pelanggan akan mendapat style baru yang diinginkan.            
                            </p>
                            <a class="btn" href="">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div id="service" class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Salon Services</p>
                    <h2>Best Salon and Barber Services for You</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/hair cut.jpg" alt="Image">
                            </div>
                            <h3>Hair Cut</h3>
                            <p>
                                Pengalaman memotong rambut dengan ramah dan hasil yang memuaskan bagi para customer
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/styling rambut.jpg" alt="Image">
                            </div>
                            <h3>Stayling Hair</h3>
                            <p>
                                membuat gaya rambut customer menjadi lebih tertata rapi sesuai dengan kemauan customer
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/color and wash.jpg" alt="Image">
                            </div>
                            <h3>Color & Wash</h3>
                            <p>
                                memberikan warna pada rambut sesuai dengan permintaan customer dan dilengkapi dengan shampo yang dapat menjaga ketahanan rambut serta warnanya agar tidak rusak
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Service End -->

        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpg" alt="Image">
                        <p>
                            Keren, ga perlu nunggu antrian bisa booking dari rumah.
                        </p>
                        <h2>Valen Andrean</h2>
                        <h3>Student</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpg" alt="Image">
                        <p>
                            nyaman deh pegawainya ramah
                        </p>
                        <h2>Jessica Aruni Bachtiar</h2>
                        <h3>Model</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpg" alt="Image">
                        <p>
                            Suka cutting hair disini, bener-bener sesuai sama apa ya yang gue mau.
                        </p>
                        <h2>Ayesha Isabella Manuel</h2>
                        <h3>Entrepreneur</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
        <!-- <div class="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->
                <!-- </div>
            </div>
        </div> -->
        Contact End


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Latest From Blog</p>
                    <h2>Learn More from Our Latest Activity </h2>
                </div>
                <div class="owl-carousel blog-carousel">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Hair Cut</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                            <h2>Hair Cutting</h2>
                            <p>
                               kami melayani customer dengan berbagai permintaan gaya potong rambut
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Styling Hair</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                            <h2>Hair Painting</h2>
                            <p>
                                pewarnaan rambut yang tidak merusak rambut dan tidak mengecewakan
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Color & Wash</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                            <h2>Smooth Hair Creambath</h2>
                            <p>
                                kami memiliki produk untuk creambath customer yang kualitasnya memuaskan
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-4.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Hair Cut</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                            <h2>Cool Pomade</h2>
                            <p>
                                membentuk dan menata rambut dengan kualitas cool pomade yang menjamin
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-5.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Styimh Hair</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                            <h2>Styling Hair</h2>
                            <p>
                                pengalaman kami dalam menata rambut berbagai permintaan customer yang unik
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-6.jpg" alt="Blog">
                        </div>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Color & Wash</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>01-Jan-2045</p>
                        </div>
                        <div class="blog-text">
                            <h2>Coloring Hair</h2>
                            <p>
                                beberapa pelanggan kami puas kana hasilnya yang tidak membuat rambut rusak
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Salon Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Jl. Mawar RT 001 / RW 01, Kel. Jatinegara, Kec Cakung, Jakarta Timur</p>
                                    <p><i class="fa fa-phone-alt"></i>+62 892134678923/p>
                                    <p><i class="fa fa-envelope"></i>Email : ironstyle@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Iron Style</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>