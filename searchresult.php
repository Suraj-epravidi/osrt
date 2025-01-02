<?php 
include 'visitor.php';
?>
<html lang="zxx">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WSK2K5FJPX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WSK2K5FJPX');
</script>
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
                <li><i class="icon_mail_alt"></i> info@osrtraders.com</li>
                <li><i class="fa fa-mobile-phone"></i> 977-01-5554421 </li>
            </ul>
            <a href="https://osrtraders.com/contact#osrt-contact-form" class="hw-btn">Visit Us Today</a>
        </div>
        <div class="om-social">
                <a href="https://www.facebook.com/osrtrade/"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/OSR_Traders"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@OSRTraders"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com/o.s.r.traders/"><i class="fa fa-instagram"></i></a>
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
                                <li><i class="icon_mail_alt"></i> info@osrtraders.com</li>
                                <li><i class="fa fa-mobile-phone"></i> 977-01-5554421</span></li>
                            </ul>
                            <a href="https://osrtraders.com/contact#osrt-contact-form" class="hw-btn">Visit Us Today</a>
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
                                <li class="active"><a href="./index">Home</a></li>
                                <li><a href="./about">About</a></li>
                                <li><a href="#">Products</a>
                                    <ul class="dropdown">
                                        <li><a href="./products-list">Product List</a></li>
                                        <li><a href="./category">Product Category</a></li>
                                    </ul>
                                </li>
                                <li><a href="./brands">Brands</a></li>
                                <li><a href="./faq">FAQ's</a></li>
                                <li><a href="./contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="hn-social">
          <a href="https://www.facebook.com/osrtrade/"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/OSR_Traders"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@OSRTraders"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com/o.s.r.traders/"><i class="fa fa-instagram"></i></a>
                            
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
                        <h4>Product Result</h4>
                        <div class="bt-option">
                            <a href="./index"><i class="fa fa-home"></i> Home</a>
                            <span>Results</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <script>
                function product_redirect(id) {
                    window.location.href = './product-details?id=' + id;
                }
            </script>
    <?php
// Database connection function
function connectToDatabase() {
    $servername = "localhost";
    $username = "osrtraders_epravidi";
    $password = "UQ!r.gTOz=oo";
    $dbname = "osrtraders_epravidi_osrt";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Function to select products based on input
function getProducts($conn, $search) {
    // Base SQL query
    $sql = "SELECT * FROM products WHERE 1=1";

    // Add condition for search box input
    if (!empty($search)) {
        $searchTerm = $conn->real_escape_string($search);
        $sql .= " AND (product_name LIKE '%$searchTerm%' OR description LIKE '%$searchTerm%' OR brand LIKE '%$searchTerm%' LIMIT 99";
    }

    // Execute the query
    $result = $conn->query($sql);

    // Return results as an associative array
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = isset($_POST['search']) ? trim($_POST['search']) : '';
    $conn = connectToDatabase();
    $products = getProducts($conn, $search);
    $conn->close();
    if (!empty($products)) {
        echo '<section class="property-section spad"><div class="container"><div class="row">';
        foreach ($products as $row) {
            $stock_label = $row['stock'] > 0 ? 'label' : 'label c-red';
            $stock_status = $row['stock'] > 0 ? 'IN STOCK' : 'NOT IN STOCK';
            echo '
                <div class="col-lg-4 col-md-6 mix all house" onclick="product_redirect(' . htmlspecialchars($row["product_id"]) . ')" style="cursor:pointer;">
                    <div class="property-item">
                        <div class="pi-pic set-bg" style="background-size:contain; image-rendering:auto" data-setbg="https://www.panelpro.osrtraders.com/pages/product_image/' . htmlspecialchars($row["image"]) . '">
                            <div class="' . $stock_label . '">' . htmlspecialchars($stock_status) . '</div>
                        </div>
                        <div class="pi-text">


                            <h5><a href="#">' . htmlspecialchars($row["product_name"]) . '</a></h5>
                            <p>' . htmlspecialchars($row["description"]).'</p>
                            <ul>
                              
                            </ul>
                        </div>
                    </div>
                </div>';
        }
        echo '</div></div></section>';
    } else {
        echo "<p>No products found matching your search.</p>";
    }
}
?>

    
    <!-- Property Section End -->

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
                            <a href="https://www.facebook.com/osrtrade/"><i class="fa fa-facebook"></i></a>
                            <a href="https://x.com/OSR_Traders"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/@OSRTraders"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com/o.s.r.traders/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Help</h5>
                        <ul>
                            <li><a href="https://osrtraders.com/files/privacypolicy.pdf" download="privacypolicy.pdf">Privacy Policy</a></li>
                            <li><a href="#">Contact Support</a></li>
                            <li><a href="#">Contact us</a></li>
                        <li><a href="https://osrtraders.com/files/returnpolicy.pdf" download="returnpolicy.pdf">Return Policy</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                   <div class="fs-widget">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="./contact">Contact</a></li>
                            <li><a href="./products-list">Products</a></li>
                            <li><a href="./contact">Product Inquiry</a></li>
                            <li><a href="./brands">Brands</a></li>
                            <li><a href="./faq">FAQ's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h5>Newsletter</h5>
                        <p>Subscribe to receive inspiration, ideas, and news in your inbox.</p>
                        <form action="newsletter" class="subscribe-form" method="POST">
                            <input type="text" placeholder="Email" name="email">
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