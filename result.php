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
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="#">Products</a>
                                    <ul class="dropdown">
                                        <li><a href="./products-list.php">Product List</a></li>
                                        <li><a href="./catagory.php">Product Category</a></li>
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
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/breadcrum.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Product Result</h4>
                        <div class="bt-option">
                            <a href="./index.php"><i class="fa fa-home"></i> Home</a>
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
                    window.location.href = './product-details.php?id=' + id;
                }
            </script>
    <?php
// Database connection function
function connectToDatabase() {
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

// Function to select products based on input
function getProducts($conn, $materials, $general_color, $brand, $product_type, $price_range) {
    $sql = "SELECT * FROM products WHERE 1=1";
    if (!empty($materials)) {
        $sql .= " AND material = '" . $conn->real_escape_string($materials) . "'";
    }
    if (!empty($general_color)) {
        $sql .= " AND color = '" . $conn->real_escape_string($general_color) . "'";
    }
    if (!empty($brand)) {
        $sql .= " AND brand = '" . $conn->real_escape_string($brand) . "'";
    }
    if (!empty($product_type)) {
        $sql .= " AND category = '" . $conn->real_escape_string($product_type) . "'";
    }
    if (!empty($price_range)) {
        $price_parts = explode("-", $price_range);
        if (count($price_parts) == 2) {
            $min_price = (float)$price_parts[0];
            $max_price = (float)$price_parts[1];
            $sql .= " AND price BETWEEN $min_price AND $max_price";
        }
    }
    $result = $conn->query($sql);
    return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
}
    if (isset($_GET['productType'])) {
        $product_type = $_GET['productType'] ?? '';
        $materials = $_GET['materials'] ?? '';
    $general_color = $_GET['general_color'] ?? '';
    $brand = $_GET['brand'] ?? '';
    $price_range = $_GET['price_range'] ?? '';
        $conn = connectToDatabase();
        $products = getProducts($conn, $materials, $general_color, $brand, $product_type, $price_range);
        $conn->close();
        if (!empty($products)) {
            echo '<section class="property-section spad"><div class="container"><div class="row">';
            foreach ($products as $row) {
                $stock_label = $row['stock'] > 0 ? 'label' : 'label c-red';
                $stock_status = $row['stock'] > 0 ? 'IN STOCK' : 'NOT IN STOCK';
                echo '
                    <div class="col-lg-4 col-md-6 mix all house" onclick="product_redirect(' . htmlspecialchars($row["product_id"]) . ')" style="cursor:pointer;">
                        <div class="property-item">
                            <div class="pi-pic set-bg" data-setbg="https://www.panel-osrt.epravidi.com/pages/product_image/' . htmlspecialchars($row["image"]) . '">
                                <div class="' . $stock_label . '">' . htmlspecialchars($stock_status) . '</div>
                            </div>
                            <div class="pi-text">
                                <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                                <div class="pt-price">Rs. ' . htmlspecialchars($row["price"]) . '<span>/MRP</span></div>
                                <h5><a href="#">' . htmlspecialchars($row["product_name"]) . '</a></h5>
                                <p>Item Code: ' . htmlspecialchars($row["product_code"]) . '<br>Color: ' . htmlspecialchars($row["color"]) . ', Brand: ' . htmlspecialchars($row["brand"]) . ', Material: ' . htmlspecialchars($row["material"]) . '</p>
                                <ul>
                                    <li>' . htmlspecialchars($row["dimensions"]) . '</li>
                                    <li><i class="fa fa-object-group"></i>&nbsp;<i class="fa fa-bathtub"></i>&nbsp;<i class="fa fa-bed"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>';
            }
            echo '</div></div></section>';
        } else {
            echo "<p>No products found matching your criteria.</p>";
        }
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $materials = $_POST['materials'] ?? '';
    $general_color = $_POST['general_color'] ?? '';
    $brand = $_POST['brand'] ?? '';
    $product_type = $_POST['product_type'] ?? '';
    $price_range = $_POST['price_range'] ?? '';
    $conn = connectToDatabase();
    $products = getProducts($conn, $materials, $general_color, $brand, $product_type, $price_range);
    $conn->close();
    if (!empty($products)) {
        echo '<section class="property-section spad"><div class="container"><div class="row">';
        foreach ($products as $row) {
            $stock_label = $row['stock'] > 0 ? 'label' : 'label c-red';
            $stock_status = $row['stock'] > 0 ? 'IN STOCK' : 'NOT IN STOCK';
            echo '
                <div class="col-lg-4 col-md-6 mix all house" onclick="product_redirect(' . htmlspecialchars($row["product_id"]) . ')" style="cursor:pointer;">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="https://www.panel-osrt.epravidi.com/pages/product_image/' . htmlspecialchars($row["image"]) . '">
                            <div class="' . $stock_label . '">' . htmlspecialchars($stock_status) . '</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">Rs. ' . htmlspecialchars($row["price"]) . '<span>/MRP</span></div>
                            <h5><a href="#">' . htmlspecialchars($row["product_name"]) . '</a></h5>
                            <p>Item Code: ' . htmlspecialchars($row["product_code"]) . '<br>Color: ' . htmlspecialchars($row["color"]) . ', Brand: ' . htmlspecialchars($row["brand"]) . ', Material: ' . htmlspecialchars($row["material"]) . '</p>
                            <ul>
                                <li>' . htmlspecialchars($row["dimensions"]) . '</li>
                                <li><i class="fa fa-object-group"></i>&nbsp;<i class="fa fa-bathtub"></i>&nbsp;<i class="fa fa-bed"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>';
        }
        echo '</div></div></section>';
    } else {
        echo "<p>No products found matching your criteria.</p>";
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