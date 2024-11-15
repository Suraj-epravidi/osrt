<?php 
include 'visitor.php';
?>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="OSR traders">
    <meta name="keywords" content="OSRT, OSR traders, OSRT NEPAL, OSR traders NEPAL, Khumaltar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSR traders</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
            <a href="./index">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="om-widget">
            <ul>
                <li><i class="icon_mail_alt"></i> info@osrtraders.com.np</li>
                <li><i class="fa fa-mobile-phone"></i> 977-01-5554421 </li>
            </ul>
            <a href="#" class="hw-btn">Visit Us Today</a>
        </div>
        <div class="om-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Wrapper End -->

    <script>// JavaScript to handle activating the sticky navbar after scrolling 20% of the page
        document.addEventListener("DOMContentLoaded", function () {
            var navbar = document.getElementById("stickyNav");
        
            window.addEventListener("scroll", function () {
                var scrollPosition = window.scrollY;
                var pageHeight = document.documentElement.scrollHeight - window.innerHeight;
                var scrollPercentage = (scrollPosition / pageHeight) * 100;
        
                if (scrollPercentage > 10) {
                    if (!navbar.classList.contains("fixed-navbar")) {
          
                        navbar.classList.add("fixed-navbar");   // Add fixed-navbar class for fade-in effect
                    }
                } else {
                    if (navbar.classList.contains("fixed-navbar")) {
                        navbar.classList.remove("fixed-navbar"); // Remove fixed-navbar class
                       
                    }
                }
             
            });
        });
        
        </script>
        <!-- Header Section Begin -->
        <header class="header-section" style="z-index: 30;">
            <div class="hs-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="./index"><img src="img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="ht-widget">
                                <ul>
                                    <li><i class="icon_mail_alt"></i> info@osrtraders.com.np</li>
                                    <li><i class="fa fa-mobile-phone"></i> 977-01-5554421</span></li>
                                </ul>
                                <a href="#" class="hw-btn">Visit Us Today</a>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-open">
                        <span class="icon_menu"></span>
                    </div>
                </div>
            </div>
            <div class="hs-nav" id="stickyNav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <nav class="nav-menu">
                                <ul>
                                    <li><a href="./index">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="#">Products</a>
                                        <ul class="dropdown">
                                            <li><a href="./products-list.php">Product List</a></li>
                                            <li><a href="./category.php">Product Category</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./brands.php">Brands</a></li>
                                    <li  class="active"><a href="./faq.php">FAQ's</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="hn-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/breadcrum.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>FAQs</h4>
                        <div class="bt-option">
                            <a href="./index"><i class="fa fa-home"></i> Home</a>
                            <span>FAQs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->

    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-item-list">
                        <div class="blog-item large-blog">
                            <div class="bi-text">
                                <h4>FAQs: </h4>
                               
                            </div>
                        </div>
                        <?php
                        // Database connection
                        $servername = "192.250.235.20";
                        $username = "epravidi_osrt_data";
                        $password = "UQ!r.gTOz=oo";
                        $dbname = "epravidi_osrt";
                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        
                        // Query to select questions and answers
                        $sql = "SELECT questions, answers FROM faqs";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // Output data for each row
                            while($row = $result->fetch_assoc()) {
                                echo '<div class="blog-item">';
                                echo '    <div class="bi-text">';
                                echo '        <h5>' . htmlspecialchars($row["questions"]) . '</h5>';
                                echo '        <p><span class="arrow_right">&nbsp;</span>' . htmlspecialchars($row["answers"]) . '</p>';
                                echo '    </div>';
                                echo '</div>';
                            }
                        } else {
                            echo "No FAQs found.";
                        }
                        
                        // Close connection
                        $conn->close();
                        ?>
                        
                        <div class="blog-item">
                            <div class="bc-widget">
                                <h4>Ask us a question</h4>
                                <form action="#" class="leave-comment-form">
                                    <div class="group-input">
                                        <input type="text" placeholder="Name">
                                        <input type="text" placeholder="Email">
                                        <input type="text" placeholder="Website">
                                    </div>
                                    <textarea placeholder="Comment"></textarea>
                                    <button type="submit" class="site-btn" >Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="follow-us">
                            <div class="section-title sidebar-title-b">
                                <h6>Follow us</h6>
                            </div>
                            <div class="fu-links">
                                <a href="https://www.facebook.com/osrtrade"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="subscribe-form">
                            <div class="section-title sidebar-title-b">
                                <h6>Subscribe</h6>
                            </div>
                            <p>Subscribe to our Newsletter</p>
                            <form action="newsletter.php" class="subscribe-form" method="POST">
                            <input type="text" placeholder="Email" name="email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
   
      <!--Blog section end-->
      <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
      <script src="https://files.bpcontent.cloud/2024/10/25/06/20241025061942-VB7QGSPE.js"></script>
    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Address</h5>
                                <p>SATHADOBATO ROAD, Godawari 44700</p>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>977-01-5554421</li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Support</h5>
                                <p>info@osrtraders.com.np</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4173.916163515737!2d85.32849037479467!3d27.653187787351264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1780d7621ea1%3A0x8b58e862052fa651!2sOSR%20TRADERS%20Pvt.Ltd.!5e0!3m2!1sen!2snp!4v1726069735507!5m2!1sen!2snp"
                height="450" style="border:0;" allowfullscreen="">
            </iframe>
        </div>
    </section>
    <!-- Contact Section End -->

        <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">
                            <a href="#">
                                <img src="img/f-logo.png" alt="">
                            </a>
                        </div>
                        <p>Be sure to follow us on our social media platforms. Stay informed about industry trends, new products, and expert tips to keep your projects on the cutting edge.</p>
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Help</h5>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Support</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                   <div class="fs-widget">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="./contact.html">Contact</a></li>
                            <li><a href="./products-list.php">Products</a></li>
                            <li><a href="./contact.html">Product Inquiry</a></li>
                            <li><a href="./brands.php">Brands</a></li>
                            <li><a href="./faq.php">FAQ's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h5>Newsletter</h5>
                        <p>Subscribe to receive inspiration, ideas, and news in your inbox.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> OSR Traders. All rights reserved | Forged by <a href="https://www.epravidi.com" target="_blank">E-pravidi Pvt. Ltd.</a>
  </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>