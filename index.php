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
    <link ="hhrefttps://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
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
</head>

<body>
    <!-- Page Preloder
    <div id="preloder">
        <div class="loader"></div>
    </div> -->
 
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
    <script>
        // JavaScript to handle activating the sticky navbar after scrolling 20% of the page
        document.addEventListener("DOMContentLoaded", function() {
            var navbar = document.getElementById("stickyNav");

            window.addEventListener("scroll", function() {
                var scrollPosition = window.scrollY;
                var pageHeight = document.documentElement.scrollHeight - window.innerHeight;
                var scrollPercentage = (scrollPosition / pageHeight) * 100;

                if (scrollPercentage > 10) {
                    if (!navbar.classList.contains("fixed-navbar")) {

                        navbar.classList.add("fixed-navbar"); // Add fixed-navbar class for fade-in effect
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
                                        <li><a href="./category.php">Product Category</a></li>
                                    </ul>
                                </li>
                                <li><a href="./brands.php">Brands</a></li>
                                <li><a href="./blog.html">FAQ's</a></li>
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

    <div class="video-wrapper">

        <h2 class="video-title">High Quality Products At Affordable Price</h2>

        <!-- Buttons below the text, left-aligned -->
        <div class="button-wrapper">
            <button class="video-button">ABOUT US</button>
            <button class="video-button">CONTACT US</button>
        </div>

        <div class="overlay"></div>

        <video autoplay loop muted>
            <source src="video_osrt.mp4" type="video/mp4" width="100%" style="display: block;">
        </video>
    </div>

    <style>
        .video-wrapper {
            position: relative;
        }

        .video-title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            pointer-events: none;
        }

        .button-wrapper {
            position: absolute;
            top: 54%;
            left: 50%;
            transform: translateX(-110%);
            z-index: 10;
            display: flex;
            gap: 20px;
        }

        .video-button {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 30px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: left;
        }

        .video-button:hover {
            background-color: white;
            color: black;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            /* 30% opacity black */
            z-index: 1;
        }

        video {
            width: 100%;
            display: block;
        }

        /* Media Query for screens up to 840px */
        @media (max-width: 464px) {
            .video-title {
                /* Adjust font size for smaller screens */
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
                /* Less shadow */
            }

            .button-wrapper {
                position: absolute;

                top: 67%;
                /* Adjust as needed */
                left: 50%;
                transform: translate(-50%, -50%);

                display: block;
                /* Stack buttons vertically if needed */
                z-index: 10;
            }

            .video-button {
                width: 100%;
                /* Full width for buttons */
                margin-bottom: 10px;
                /* Space between buttons */
                text-align: center;
                /* Center text inside buttons */
            }

        }
    </style>



    <!-- Search Section Begin -->
    <?php
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
// Ensure database connection
$conn = connectToDatabase();

// Fetch distinct values for each dropdown
function fetchDistinctValues($conn, $column) {
    $sql = "SELECT DISTINCT $column FROM products ORDER BY $column";
    $result = $conn->query($sql);

    $values = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $values[] = $row[$column];
        }
    }
    return $values;
}

// Get dropdown data
$materials = fetchDistinctValues($conn, 'material');
$colors = fetchDistinctValues($conn, 'color');
$brands = fetchDistinctValues($conn, 'brand');
$types = fetchDistinctValues($conn, 'category');

// Close the database connection after fetching all values
$conn->close();
?>

<section class="search-section spad">
    <div class="container">
        <!-- Other HTML here -->
        <div class="search-form-content">
            <form action="property.php" method="POST" class="filter-form">
                <select class="sm-width" name="materials">
                    <option value="">Materials</option>
                    <?php foreach ($materials as $material) {
                        echo "<option value='" . htmlspecialchars($material) . "'>" . htmlspecialchars($material) . "</option>";
                    } ?>
                </select>
                
                <select class="sm-width" name="general_color">
                    <option value="">General Color</option>
                    <?php foreach ($colors as $color) {
                        echo "<option value='" . htmlspecialchars($color) . "'>" . htmlspecialchars($color) . "</option>";
                    } ?>
                </select>
                
                <select class="sm-width" name="brand">
                    <option value="">Brand</option>
                    <?php foreach ($brands as $brand) {
                        echo "<option value='" . htmlspecialchars($brand) . "'>" . htmlspecialchars($brand) . "</option>";
                    } ?>
                </select>
                
                <select class="sm-width" name="product_type">
                    <option value="">Type of Product</option>
                    <?php foreach ($types as $type) {
                        echo "<option value='" . htmlspecialchars($type) . "'>" . htmlspecialchars($type) . "</option>";
                    } ?>
                </select>
                
                <!-- Add the rest of your form elements as needed -->
                <button type="submit" class="search-btn sm-width">Search</button>
            </form>
        </div>
    </div>
</section>

    <!-- Search Section End -->

    <!-- Property Section Begin -->
    <section class="property-section latest-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Products</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="property-controls">
                        <ul>
                            <li data-filter="all">All</li>
                            <li data-filter=".apart">Tiles</li>
                            <li data-filter=".house">Bathware</li>
                            <li data-filter=".office">Electricals</li>
                            <li data-filter=".hotel">Commode</li>
                            <li data-filter=".restaurent">Vanity Basin</li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
                function product_redirect(id){
                    window.location.href='./property-details.php?id='+id;
                }
            </script>
            <div class="row">

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
                } else {
                    
                }

                // SQL Query to fetch product data
                $sql = "SELECT price, product_id, product_code, color, brand, material, dimensions, product_name, image, category, stock FROM products LIMIT 9 ";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Query failed: " . $conn->error);
                }

                if ($result->num_rows > 0) {
                   
                    while ($row = $result->fetch_assoc()) {
                        // Determine the stock status
                        $stock_label = '';
                        $stock_status = '';

                        if ($row['stock'] > 0) {
                            $stock_label = 'label';
                            $stock_status = 'IN STOCK';
                        } else {
                            $stock_label = 'label c-red';
                            $stock_status = 'NOT IN STOCK';
                        }

                        // Display each property item 
                        echo '<div class="col-lg-4 col-md-6 mix all house" onclick="product_redirect(' . $row["product_id"] . ')" style="cursor:pointer;">';
                        echo '<div class="property-item">';
                        echo '<div class="pi-pic set-bg" data-setbg="https://www.panel-osrt.epravidi.com/pages/product_image/'.htmlspecialchars($row["image"]).'">';
                        echo '<div class="' . $stock_label . '">' . htmlspecialchars($stock_status) . '</div>';
                        echo '</div>';
                        echo '<div class="pi-text">';
                        echo '<a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>';
                        echo '<div class="pt-price">Rs. ' . htmlspecialchars($row["price"]) . '<span>/MRP</span></div>';
                        echo '<h5><a href="#">' . htmlspecialchars($row["product_name"]) . '</a></h5>';
                        echo '<p>Item Code: ' . htmlspecialchars($row["product_code"]) . '<br>';
                        echo 'Color: ' . htmlspecialchars($row["color"]) . ', Brand: ' . htmlspecialchars($row["brand"]) . ', Material: ' . htmlspecialchars($row["material"]) . '</p>';
                        echo '<ul>';
                        echo '<li>' . htmlspecialchars($row["dimensions"]) . '</li>';
                        echo '<li>';
                        echo '<i class="fa fa-object-group"></i>&nbsp;&nbsp;';
                        echo '<i class="fa fa-bathtub"></i>&nbsp;&nbsp;';
                        echo '<i class="fa fa-bed"></i>&nbsp;&nbsp;';
                        echo '</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No products found in the database";
                }

                $conn->close();
                ?>



            </div>
        </div>
    </section>
    <!-- Property Section End -->
                
    <!-- Chooseus Section Begin -->
    <section class="chooseus-section spad set-bg" data-setbg="img/chooseus/chooseus-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="chooseus-text">
                        <div class="section-title">
                            <h4>Why choose us</h4>
                        </div>
                        <p>OSRT is a leading trading company specializing in high-quality construction equipment, materials, bathware, and hardware. With a commitment to excellence and innovation, OSRT caters to both residential and commercial projects, offering a wide range of products to meet diverse needs.</p>
                    </div>
                    <div class="chooseus-features">
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-1.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Home Delivery</h5>
                                <p>Fast, reliable delivery right to your door</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-2.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Sales & Discounts</h5>
                                <p>Premium products at competitive prices</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-3.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Quality Assurance</h5>
                                <p>Guaranteed high standards for durability and performance</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-4.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Customer Satisfaction</h5>
                                <p>Dedicated service ensuring a seamless shopping experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->


    <section class="property-section latest-property-section spad">

        <div class="logo-carousel">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h4>Proudly the dealers of.:</h4>
                        </div>
                    </div>
                </div>
                <div class="lc-slider owl-carousel">

                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-1.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-2.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-3.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-4.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-5.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-6.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-6.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-6.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-6.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-6.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/lc-7.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- Logo Carousel End -->








    <!-- Categories Section End -->

    <!-- Testimonial Section Begin -->

    <!-- Testimonial Section End -->

    <!-- Logo Carousel Begin -->




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
                                <p>Khumaltar-15, Sathadobato Road, Lalitpur</p>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li> 977-01-5554421</li>

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
     <!-- chatbot -->
                 
    <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
<script src="https://files.bpcontent.cloud/2024/10/25/06/20241025061942-VB7QGSPE.js"></script>
    

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
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright-text">

                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> OSR Traders. All rights reserved | Forged by <a href="https://www.epravidi.com" target="_blank">E-pravidi Pvt. Ltd.</a>
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
    <script>
    // Function to get URL parameters
    function getQueryParam(param) {
      let params = new URLSearchParams(window.location.search);
      return params.get(param);
    }

    // Function to show alert on page load if alert_message exists

    window.onload = function() {
      let alertMessage = getQueryParam('alert_message');
      if (alertMessage) {
        console.log(alertMessage);
        alert(alertMessage); // Display the alert box
      }
    }
  </script>
</body>

</html>