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

    <script>
        // JavaScript to handle activating the sticky navbar after scrolling 20% of the page
        document.addEventListener("DOMContentLoaded", function () {
            var navbar = document.getElementById("stickyNav");

            window.addEventListener("scroll", function () {
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
        function getQueryParam(param) {
            let params = new URLSearchParams(window.location.search);
            return params.get(param);
        }

        // Function to show alert on page load if alert_message exists

        window.onload = function () {
            let alertMessage = getQueryParam('alert_message');

            if (alertMessage) {
                console.log(alertMessage);
                alert(alertMessage); // Display the alert box
            }
        }

       
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
            <a href="https://osrt.epravidi.com/contact#osrt-contact-form" class="hw-btn">Visit Us Today</a>
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
                            <a href="./index"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="icon_mail_alt"></i> info@osrtraders.com.np</li>
                                <li><i class="fa fa-mobile-phone"></i> 977-01-5554421</span></li>
                            </ul>
                            <a href="https://osrt.epravidi.com/contact#osrt-contact-form" class="hw-btn">Visit Us Today</a>
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
                                        <li class="active"><a href="./products-list">Product List</a></li>
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
     <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
<script src="https://files.bpcontent.cloud/2024/11/12/13/20241112133346-PL5ZLF1B.js"></script>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/breadcrum.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Products</h4>
                        <div class="bt-option">
                            <a href="./index"><i class="fa fa-home"></i> Home</a>
                            <a href="./brands">Products</a>
                            <span>Lists</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Profile Section Begin -->
    <section class="profile-section spad">
        <div class="container">
            <div class="profile-agent-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="profile-agent-info">
                            <div class="pi-pic">
                                <img src="img/agents/LOGO.png" alt="">

                            </div>
                            <div class="pi-text">
                                <h5>OSR Traders</h5>
                                <span>Khumaltar Lalitpur</span>
                                <p>Since 2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="profile-agent-widget">
                            <ul>
                                <li>Product <span>
                                    <?php
                                    $servername = "192.250.235.20";
                                    $username = "epravidi_osrt_data";
                                    $password = "UQ!r.gTOz=oo";
                                    $dbname = "epravidi_osrt";

                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    
                                    $sql_products = "SELECT COUNT(*) AS product_count FROM products";
                                    $result_products = $conn->query($sql_products);
                                    
                                    $product_count = 0;
                                    if ($result_products->num_rows > 0) {
                                        $row = $result_products->fetch_assoc();
                                        $product_count = $row['product_count'];
                                    }
                                    echo $product_count;
                                    
                                    ?></span></li>
                                <li>Email <span>info@osrtraders.com.np</span></li>
                                <li>Phone <span>977-01-5554421</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="profile-agent-newslatter">
                            <h5>Search our products </h5>
                            <form class="product-search-box" action="#">
                                <input type="text" name="query" placeholder="Search products">
                                <button type="submit"
                                    style="border: none; padding: 0; margin: 0; height: 47px; width: 50px; background-color: #bb8e29; cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white">
                                        <path
                                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile Section End -->



    <!-- Property Section Begin -->
    <section class="property-section profile-page spad">
        <div class="container">
            <div class="row">
            <script>
                function product_redirect(id) {
                    window.location.href = './product-details?id=' + id;
                }
            </script>
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

                // Get page number from URL, default to 1 if not provided
                $page_no = isset($_GET['page_no']) ? (int) $_GET['page_no'] : 1;
                if ($page_no < 1) {
                    $page_no = 1;
                }
                $products_per_page = 9; // Display 9 products per page  
                
                // Calculate the ID range for the current page
                $start_id = $products_per_page * ($page_no - 1) + 1;
                $end_id = ($start_id + $products_per_page) - 1;

                // SQL Query to fetch product data within the calculated ID range
                $sql = "SELECT price, product_id, product_code, color, brand, material, dimensions, product_name, image, category, stock 
        FROM products 
        WHERE product_id BETWEEN ? AND ?";

                // Initialize the prepared statement
                $stmt = $conn->prepare($sql);

                // Bind the parameters to the statement (two integers)
                $stmt->bind_param("ii", $start_id, $end_id);
                $stmt->execute();
                $result = $stmt->get_result();
                // SQL Query to count total products
                $sql_count = "SELECT COUNT(*) as total_products FROM products";
                $result_count = $conn->query($sql_count);

                if (!$result_count) {
                    die("Query failed: " . $conn->error);
                }

                $row_count = $result_count->fetch_assoc();
                $total_products = (int) $row_count['total_products']; // Convert to integer
                echo '<input name="total_products" type="number" id="total_products" readonly value="' . $total_products . '" style="display:none;">';
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

                        // Display each product item
                        echo '<div class="col-lg-4 col-md-6 mix all house" onclick="product_redirect(' . $row["product_id"] . ')" style="cursor:pointer;">';
                        echo '<div class="property-item">';
                        echo '<div class="pi-pic set-bg" data-setbg="https://www.osrtpanel.epravidi.com/pages/product_image/' . htmlspecialchars($row["image"]) . '">';
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
                        echo "<script>

        let pageNo =  getQueryParam('page_no');
        console.log('pagination is working');
        if(pageNo==null){
            pageNo=1;
            }
            console.log(pageNo);
            window.onload=function(){
        generatePagination(pageNo);
    }
        </script>";
                    }
                } else {
                    echo "No products found in the database";
                }

                // Close the database connection
                $conn->close();
                ?>


                <div class="col-lg-12">

                    <?php echo '<div class="property-pagination">';
                    $last_page = ceil($total_products / 9);
                    if ($page_no > 1 ) {
                        echo '<a href="./products-list?page_no=' . $page_no - 1 . '" class="icon"><span class="arrow_left"></span></a>';
                    }
                    if ($page_no != 1  && $page_no != 2) {
                        echo ' <a href="./products-list?page_no=1">1</a>';
                    }
                    if ($last_page > 1 && $page_no > 1) {
                        echo '<a href="./products-list?page_no=' . $page_no - 1 . '">' . $page_no - 1 . '</a>';
                    }
                    echo '<a href="./products-list?page_no=' . $page_no . '">' . $page_no . '</a>';
                    if($page_no < $last_page-1){
                        echo '<a href="./products-list?page_no=' . $page_no + 1 . '">' . $page_no + 1 . '</a>';
                    }
                    if ($page_no < $last_page) {
                        echo '<a href="./products-list?page_no=' . $last_page . '">' . $last_page . '</a>';
                        echo '<a href="./products-list?page_no=' . $page_no + 1 . '" class="icon"><span class="arrow_right"></span></a>';
                    }


                    echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    </section>
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
                            <li><a href="privacypolice.pdf" download="privacypolicy.pdf">Privacy Policy</a></li>
                            <li><a href="#">Contact Support</a></li>
                            <li><a href="#">Contact us</a></li>
               <div class="fs-social">
                            <a href="https://www.facebook.com/osrtrade/"><i class="fa fa-facebook"></i></a>
                            <a href="https://x.com/OSR_Traders"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/@OSRTraders"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com/o.s.r.traders/"><i class="fa fa-instagram"></i></a>
                        </div>
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