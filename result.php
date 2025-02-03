<?php 
include 'visitor.php';
?>
<!DOCTYPE html>
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
    <meta name="keywords" content="OSR Traders, OSR traders, OSR Traders NEPAL, OSR traders , OSR Traders, osrt, osr, osr traders">
    <meta name="description" content="osrTraders – Your trusted partner in global trading and supply chain solutions. We specialize in quality products, efficient logistics, and excellent customer service. Explore innovative trading opportunities with us today!">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="OSR Traders - Product Results">
    <meta property="og:description" content="Find the best products at OSR Traders.">
    <meta property="og:url" content="https://osrtraders.com">
    <meta property="og:image" content="https://osrtraders.com/img/About-us.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="OSR Traders">
    <meta property="og:locale" content="ne_NP">
    <meta property="og:video" content="https://osrtraders.com/video_osrt.mp4">
    <meta name="author" content="OSR Traders">
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
    <h1 style="display:none;">Product Results - OSR Traders</h1>
    <!-- Page Preloder -->
    <div id="result-overlay">
        <!-- Content with the text -->
        <div class="overlay-content">
            <h2>Product Display and Pricing Agreement</h2>
            <p>By accessing and viewing the products listed on this website, you acknowledge and agree to the following terms:</p>
            <ul>
                <li><strong>Price Variation:</strong> The prices displayed on this website may differ from the actual prices in the physical store. The prices listed on the website are subject to change and may not reflect the current pricing at the store location.</li>
                <li><strong>Product Images:</strong> The images displayed for each product on the website are fetched directly from the official website of the dealer company. As such, the images may not necessarily match the actual product, and there could be discrepancies between the image, product name, and the actual product.</li>
            </ul>
            <p>By continuing to browse and view the products, you confirm your understanding and acceptance of these terms.</p>

            <!-- Agree button at the bottom center -->
            <button class="agree-btn" onclick="closeOverlay()">Agree</button>
        </div>

        <script>
            // Function to close the overlay when the "Agree" button is clicked
            function closeOverlay() {
                document.getElementById('result-overlay').style.display = 'none';
            }
        </script>
        <script>
            function checkCookie(cookieName) {
                // Get all cookies as a single string
                const cookies = document.cookie;

                // Check if the cookie name exists in the string
                return cookies.split('; ').some(cookie => cookie.startsWith(`${cookieName}=`));
            }

            // Example usage
            const cookieName = "product_agreement";
            document.addEventListener('DOMContentLoaded', function() {
                if (checkCookie(cookieName)) {
                    console.log("Cookie found!");
                } else {
                    console.log("Cookie not found");
                    document.getElementById('result-overlay').style.display = 'flex';
                    const date = new Date();
                    date.setTime(date.getTime() + (30 * 60 * 1000)); // 30 minutes in milliseconds
                    document.cookie = `product_agreement=agreed; path=/; expires=${date.toUTCString()}`;
                }
            });
        </script>
        <style>
            /* Style for the overlay */
            #result-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 1000;
            }

            .overlay-content {
                background: #fff;
                padding: 20px;
                max-width: 600px;
                text-align: center;
                border-radius: 10px;
            }

            h2 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            p {
                font-size: 16px;
                margin-bottom: 10px;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            li {
                font-size: 16px;
                margin: 10px 0;
            }

            .agree-btn {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                position: absolute;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
            }

            .agree-btn:hover {
                background-color: #45a049;
            }
        </style>
    </div>
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
                <img src="img/logo.png" alt="OSR Traders Logo">
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
                <a href="https://www.facebook.com/osrtrade/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/OSR_Traders" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@OSR Tradersraders" target="_blank"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com/o.s.r.traders/" target="_blank"><i class="fa fa-instagram"></i></a>
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
                            <a href="./index"><img src="img/logo.png" alt="OSR Traders Logo"></a>
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
          <a href="https://www.facebook.com/osrtrade/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/OSR_Traders" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@OSR Tradersraders" target="_blank"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com/o.s.r.traders/" target="_blank"><i class="fa fa-instagram"></i></a>
                            
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
            $sql .= " AND price BETWEEN $min_price AND $max_price LIMIT 99";
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
                            <div class="pi-pic set-bg" data-setbg="https://www.panelpro.osrtraders.com/pages/product_image/' . htmlspecialchars($row["image"]) . '">
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
                        <div class="pi-pic set-bg" style="background-size:contain; image-rendering:auto" data-setbg="https://www.panelpro.osrtraders.com/pages/product_image/' . htmlspecialchars($row["image"]) . '">
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
                            <a href="https://www.facebook.com/osrtrade/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://x.com/OSR_Traders" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/@OSR Tradersraders" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com/o.s.r.traders/" target="_blank"><i class="fa fa-instagram"></i></a>
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