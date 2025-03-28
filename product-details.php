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
    <meta property="og:title" content="OSR Traders - Product Details">
    <meta property="og:description" content="Detailed information about the products available at OSR Traders.">
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
    <h1 style="display:none;">Product Details - OSR Traders</h1>
    <!-- Page Preloder -->
    <div id="product-details-overlay">
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
                document.getElementById('product-details-overlay').style.display = 'none';
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
                    document.getElementById('product-details-overlay').style.display = 'flex';
                    const date = new Date();
                    date.setTime(date.getTime() + (30 * 60 * 1000)); // 30 minutes in milliseconds
                    document.cookie = `product_agreement=agreed; path=/; expires=${date.toUTCString()}`;
                }
            });
        </script>

        <style>
            /* Style for the overlay */
            #product-details-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.7);
                display: none;
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
                <a href="https://www.facebook.com/osrtrade/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/OSR_Traders" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@OSR Tradersraders" target="_blank"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com/o.s.r.traders/" target="_blank"><i class="fa fa-instagram"></i></a>
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
                                <li><a href="./index">Home</a></li>
                                <li><a href="./about">About</a></li>
                                <li class="active"><a href="#">Products</a>
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


    <?php
    // Step 1: Database connection (Adjust the connection details as per your setup)
    // Database connection
    $servername = "localhost";
    $username = "osrtraders_epravidi";
    $password = "UQ!r.gTOz=oo";
    $dbname = "osrtraders_epravidi_osrt";

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
            <div class="product-details">
                <div class="col-lg-8">
                    <div class="pd-text">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="pd-title">
                                    <div class="label <?php if ($product['stock'] < 0) {
                                                            echo "bg-danger";
                                                        } ?>  .bg-danger"> <?php if ($product['stock'] < 0) {
                                                                                echo "Out of stock";
                                                                            } else {
                                                                                echo "In Stock";
                                                                            } ?> </div>
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
                                                    <span class="type-name">Product Category</span>
                                                    <span class="type-value"><?php echo htmlspecialchars($product['category']); ?></span>
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
                                            <?php echo "<p>Description: " . htmlspecialchars($product['description']) . "</p>" ?>
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
                            <form action="process_contact" class="review-form" method="post">
                                <div class="group-input">
                                    <input name="name" type="text" placeholder="Name" required>
                                    <input type="text" name="email" placeholder="Email" required>
                                    <input type="text" name="website" placeholder="Website">
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
                                <div class="sf-slider owl-carousel" style="pointer-events: none;">
                                    <div class="sf-item set-bg" style="filter:contrast(1.1);" data-setbg="<?php echo 'https://panelpro.osrtraders.com/pages/product_image/' . htmlspecialchars($product['image']); ?>">

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
<script src="https://files.bpcontent.cloud/2024/11/12/13/20241112133346-PL5ZLF1B.js"></script>

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