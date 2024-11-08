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
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li class="active"><a href="#">Products</a>
                                    <ul class="dropdown">
                                        <li><a href="./products-list.php">Product List</a></li>
                                        <li><a href="./category.php">Product Category</a></li>
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


    <?php
    // Step 1: Database connection (Adjust the connection details as per your setup)
    // Database connection
    $servername = "192.250.235.20";
    $username = "epravidi_osrt_data";
    $password = "UQ!r.gTOz=oo";
    $dbname = "epravidi_osrt";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2: Retrieve Product ID from URL
    // Assuming the URL is something like: http://yourwebsite.com/product.php?id=123
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $product_id = intval($_GET['id']);  // Ensure it's an integer

        // Step 3: Prepare the SQL statement to get product details by product_id
        $sql = "SELECT * FROM products WHERE product_id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $product_id);  // Bind the product_id to the query
            $stmt->execute();
            $result = $stmt->get_result();

            // Step 4: Check if product exists
            if ($result->num_rows > 0) {
                // Fetch the product details
                $product = $result->fetch_assoc();
            } else {
                echo "<p>Product not found.</p>";
            }

            $stmt->close();
        } else {
            echo "<p>Failed to prepare statement.</p>";
        }
    } else {
        echo "<p>Invalid product ID.</p>";
    }

    // Close the connection
    $conn->close();
    ?>


    <!-- Property Details Section Begin -->
    <section class="property-details-section">
        <section class="property-details-section">
            <br>
            <br>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="pd-text">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="pd-title">  
                                    <div class="label <?php if ($product['stock'] < 0) {
                                        echo "bg-danger";
                                    }?>  .bg-danger"> <?php if ($product['stock'] < 0) {
                                        echo "Out of stock";
                                    }
                                        else{
                                            echo "In Stock";
                                        }?>           </div>
                                    <div class="pt-price">Rs.
                                    <?php echo htmlspecialchars($product['price']); ?>
                                    </div>
                                    <h3><?php echo htmlspecialchars($product['product_name']); ?></h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                        <div class="pd-board">
                            <div class="tab-board">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Description</a>
                                    </li>

                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tab-details">
                                            <ul class="left-table">
                                                <li>
                                                    <span class="type-name">Product Type</span>
                                                    <span class="type-value">House</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Product ID</span>
                                                    <span class="type-value">#<?php echo htmlspecialchars($product['product_code']); ?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Price</span>
                                                    <span class="type-value">Rs.<?php echo htmlspecialchars($product['price']); ?></span>
                                                </li>

                                                <li>
                                                    <span class="type-name">Material</span>
                                                    <span class="type-value"><?php echo htmlspecialchars($product['material']); ?></span>
                                                </li>
                                            </ul>
                                            <ul class="right-table">
                                                <li>
                                                    <span class="type-name">Dimension</span>
                                                    <span class="type-value"><?php echo htmlspecialchars($product['dimensions']); ?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Pattern</span>
                                                    <span class="type-value">#</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Color</span>
                                                    <span class="type-value"><?php echo htmlspecialchars($product['color']); ?></span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Brand</span>
                                                    <span class="type-value"><?php echo htmlspecialchars($product['brand']); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <div class="tab-desc">
                                     <?php   echo "<p>Description: " . htmlspecialchars($product['description']) . "</p>" ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="pd-widget">
                            <h4>Address</h4>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4173.916163515737!2d85.32849037479467!3d27.653187787351264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1780d7621ea1%3A0x8b58e862052fa651!2sOSR%20TRADERS%20Pvt.Ltd.!5e0!3m2!1sen!2snp!4v1726069735507!5m2!1sen!2snp" height="350" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                            <div class="map-location">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="ml-item">
                                            <div class="ml-single-item">
                                                <h6>OSR Traders <span>( <i class="fa fa-location-arrow"></i> 5 km )</span></h6>
                                                <p>Khumaltar, Lalitpur</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="pd-widget">
                            <h4>Inquiry on product</h4>
                            <form action="process_contact.php" class="review-form" method = "post">
                                <div class="group-input">
                                    <input  name = "name" type="text" placeholder="Name" required>
                                    <input type="text" name = "email" placeholder="Email" required>
                                    <input type="text" name = "website" placeholder="Website">
                                </div>
                                <textarea placeholder="Messages" name="comment" required></textarea>

                                <button type="submit" class="site-btn">send messages</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="property-sidebar">
                        <div class="single-sidebar">


                            <div class="single-sidebar slider-op">
                                <div class="section-title sidebar-title">
                                    <h4>Product Image</h4>
                                </div>
                                <div class="sf-slider owl-carousel">
                                   <div class="sf-item set-bg" data-setbg="<?php echo'https://panel-osrt.epravidi.com/pages/product_image/' . htmlspecialchars($product['image']); ?>">

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Property Details Section End -->
    <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
    <script src="https://files.bpcontent.cloud/2024/10/25/06/20241025061942-VB7QGSPE.js"></script>

    <!-- Contact Section Begin -->

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
                        <form action="newsletter.php" class="subscribe-form" method="POST">
                            <input type="text" placeholder="Email" name="email">
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
</body>

</html>