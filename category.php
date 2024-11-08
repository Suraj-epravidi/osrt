<!DOCTYPE html>
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
    <style>
        /* Categories Section Styling */
        @media (max-width: 600px) {
            .cs-item-list {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: stretch;
            justify-content: center; /* Ensures space between items */
            max-width: 100%; /* Allows items to take full width */
            
        }
        .cs-item {
        
            background-size: cover;
            background-position: center;
            height: 250px;
           display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        }
        .categories { 
           display: flex;
           justify-content: center; /* Center-align the image row */
           align-items: center;
           
       }
        /* Category List */
        .cs-item-list {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: stretch;
            justify-content: center; /* Ensures space between items */
            width: 90vw; /* Allows items to take full width */
            
        }
    
        /* Category Items */
        .cs-item {
            /* 5 items per row (20% width each) */
            margin: 10px;
            background-size: cover;
            background-position: center;
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        /* Adjust image size based on space */
        .cs-item img {
            max-width: 100%;
            max-height: 100%;
            min-width: 120px;
            object-fit: cover; /* Ensures the image fits proportionally */
            border-radius: 8px;
        }
    
        /* Category Text */
        .cs-text {
            z-index: 2;
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }
    
        /* Hover Effect for Category Items */
        .cs-item:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
            transition: all 0.7s ease;
        }
        
        
    </style>
    
</head>

<body>
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
            <a href="./index.php">
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

    <!-- Header Section Begin -->
    <header class="header-section" style="z-index: 30;">
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
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
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li   class="active"><a href="#" >Products</a>
                                    <ul class="dropdown">
                                        <li><a href="./products-list.php">Product List</a></li>

                                        <li  class="active"><a href="./category.php">Product Category</a></li>
                                    </ul>
                                </li>
                                <li><a href="./brands.php">Brands</a></li>
                                <li><a href="./faq.php">FAQ's</a></li>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/breadcrum.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Product Categories</h4>
                        <div class="bt-option">
                            <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                            <a>Products</a>
                            <span>Product Category</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
     <br>
     <br>

    <!-- Categories Section Begin -->
    <section class="categories">
    <div class="cs-item-list">
        <?php
          function connectToDatabase()
          {
              $servername = "192.250.235.20";
              $username = "epravidi_osrt_data";
              $password = "UQ!r.gTOz=oo";
              $dbname = "epravidi_osrt";
              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }
              return $conn;
          }
        $conn = connectToDatabase();
        
        // Query to get categories
        $sql = "SELECT category_name, category_image, product_count FROM categories"; // Make sure you have product_count in your table
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Category display
                echo '<div class="cs-item set-bg" data-setbg="https://panel-osrt.epravidi.com/pages/category/' . htmlspecialchars($row["category_image"]) . '">';
                echo '<div class="cs-text">';
                echo '<h5>' . htmlspecialchars($row["category_name"]) . '</h5>';
                echo '<span>' . htmlspecialchars($row["product_count"]) . ' Products</span>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No categories found.</p>";
        }
        
        // Close the connection
        $conn->close();
        ?>
    </div>
</section>

    <!-- Categories Section End -->
    <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
    <script src="https://files.bpcontent.cloud/2024/10/25/06/20241025061942-VB7QGSPE.js"></script>
   <!-- Feature Product Section Begin -->
   <script>
                function pageRedirect(pageLocation){
                   url=pageLocation.innerText;
                    if(url=="View all Products"){
                        window.location.href='./property.php?productType';
                    }
                    else
                    { 
                         window.location.href='./property.php?productType=' + url;
                    }
                }

            </script>
   <section class="feature-property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="feature-property-left">
                    <div class="section-title">
                        <h4>Feature Product</h4>
                    </div>
                    <ul>
                        <li onclick="pageRedirect(this)">Tiles</li>
                        <li onclick="pageRedirect(this)">Shower Head</li>
                        <li onclick="pageRedirect(this)">Light Switches</li>
                        <li onclick="pageRedirect(this)">Commode</li>
                        <li onclick="pageRedirect(this)">Vanity Basin's</li>
                        <li onclick="pageRedirect(this)">Bathware's</li>
                    </ul>
                    <a href="#" onclick="pageRedirect(this)">View all Products</a>
                </div>
            </div>
            <div class="col-lg-8 p-0">
                <div class="fp-slider owl-carousel">
                    <div class="fp-item set-bg" data-setbg="img/feature-property/fp-1.jpg">
                        <div class="fp-text">
                            <h5 class="title">Island Carara</h5>
                            <p> Item Code .: 1001<br>
                                Color.: Cream, Brand.: Somany, Material.: Marble</p>
                            <div class="label">IN STOCK</div>
                            <h5>Rs 2900<span>/MRP</span></h5>
                            
                        </div>
                    </div>
                    <div class="fp-item set-bg" data-setbg="img/feature-property/fp-2.jpg">
                        <div class="fp-text">
                            <h5 class="title">Island Carara</h5>
                            <p> Item Code .: 1001<br>
                                Color.: Cream, Brand.: Somany, Material.: Marble</p>
                            <div class="label">IN STOCK</div>
                            <h5>Rs 2900<span>/MRP</span></h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Product Section End -->

   
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
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Product Inquiry</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">FAQ's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h5>Newsletter</h5>
                        <p>Subscribe to receive inspiration, ideas, and news in your inbox.</p>
                        <form action="newsletter.php" class="subscribe-form" method="POST">
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