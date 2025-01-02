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
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Font -->
    <link="hhrefttps: //fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
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

    <div id="home-overlay">
        <!-- Close button -->
        <button class="close-btn" onclick="closeOverlay()">✖</button>
        <!-- Image to display with srcset for responsive behavior -->
        <img
            id="responsive-image"
            src="./uploads/welcome-image.jpg"
            alt="Welcome Image">

        <script>
            const image = document.getElementById('responsive-image');

            // Function to update the image source based on screen size
            function updateImageSource() {
                if (window.matchMedia('(max-width: 600px)').matches) {
                    image.src = './uploads/welcome-image-responsive.jpg'; // Small image for screens <= 600px
                } else if (window.matchMedia('(max-width: 900px)').matches) {
                    image.src = './uploads/welcome-image-responsive.jpg'; // Medium image for screens <= 900px
                } else {
                    image.src = './uploads/welcome-image.jpg'; // Large image for screens > 900px
                }
            }

            // Initial call to set the correct image on page load
            updateImageSource();

            // Add event listener to update the image on window resize
            window.addEventListener('resize', updateImageSource);
        </script>
    </div>


    <script>
        // Function to close overlay
        function closeOverlay() {
            document.getElementById('home-overlay').style.display = 'none';
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
        const cookieName = "osrt_user";
        document.addEventListener('DOMContentLoaded', function() {
            if (checkCookie(cookieName)) {
                console.log("Cookie found!");
            } else {
                console.log("Cookie not found");
                document.getElementById('home-overlay').style.display = 'flex';
                const date = new Date();
                date.setTime(date.getTime() + (30 * 60 * 1000)); // 30 minutes in milliseconds
                document.cookie = `osrt_user=dark_mode; path=/; expires=${date.toUTCString()}`;
            }
        });
    </script>
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
            <a href="https://osrt.epravidi.com/contact#osrt-contact-form" class="hw-btn">Visit Us Today</a>
        </div>
        <div class="om-social">
            <a href="https://www.facebook.com/osrtrade/"><i class="fa fa-facebook"></i></a>
            <a href="https://x.com/OSR_Traders"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@OSRTraders"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com/o.s.r.traders/"><i class="fa fa-instagram"></i></a>

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
                            <a href="./index"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="icon_mail_alt"></i> info@osrtraders.com</li>
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

    <div class="video-wrapper">
        <div class="content-wrapper">
            <h2 class="video-title">High Quality Products At Affordable Price</h2>

            <!-- Buttons below the text, left-aligned -->
            <div class="button-wrapper">
                <button class="video-button">ABOUT US</button>
                <button class="video-button">CONTACT US</button>
            </div>
        </div>
        <div class="overlay"></div>

        <video autoplay loop muted>
            <source src="uploads/homepage-video.mp4" type="video/mp4" width="100%" style="display: block;">
        </video>
    </div>

    <style>
        .video-wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 76vh;
            overflow: hidden;
        }

        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .content-wrapper {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* Aligns the button-wrapper with the start of the text */
            text-align: left;
            /* Aligns text inside content-wrapper */
            gap: 0.5em;
            /* Adds minimal space between title and buttons */
        }

        .video-title {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            pointer-events: none;
            font-size: 2em;
            margin: 0;
        }

        .button-wrapper {
            display: flex;
            gap: 1em;
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



        video {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Media Query for screens up to 840px */
        @media (max-width: 768px) {
            /* .video-title {
               
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
                top: 30%;
            } */

            .button-wrapper {
                flex-direction: column;
            }

            /* .video-button {
                width: 100%;
                margin-bottom: 10px;
                
                text-align: center;
               
            } */
            .content-wrapper {
                padding: 5vw;
            }


        }
    </style>



    <!-- Search Section Begin -->
    <?php
    function connectToDatabase()
    {
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
    // Ensure database connection
    $conn = connectToDatabase();

    // Fetch distinct values for each dropdown
    function fetchDistinctValues($conn, $column)
    {
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
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h4>Find Best Product For you</h4>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="change-btn">

                        <!-- Search Box  -->
                        <div class="cb-item">
                            <form class="product-search-box" method="POST" action="searchresult">
                                <input type="text" name="search" placeholder="Search products">
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
            <div class="search-form-content">
                <form action="result" method="POST" class="filter-form">
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
                    <select class="sm-width" name="stock_availability">
                        <option value="">Stock Availability</option>
                        <option value="office">In Stock</option>
                    </select>

                    <select class="sm-width" name="product_type">
                        <option value="">Type of Product</option>
                        <?php foreach ($types as $type) {
                            echo "<option value='" . htmlspecialchars($type) . "'>" . htmlspecialchars($type) . "</option>";
                        } ?>
                    </select>

                    <select class="sm-width" name="no_of_products">
                        <option value="">No Of Products</option>
                        <option value="1-100">1-100</option>
                        <option value="100-1000">100-1000</option>
                        <option value="1000-10000">1000-10000</option>
                        <option value="10000+">10000+</option>
                    </select>
                    <div class="room-size-range-wrap sm-width">
                        <div class="price-text">
                            <label for="roomsizeRange">Size of property:</label>
                            <input type="text" id="roomsizeRange" readonly>
                        </div>
                        <div id="roomsize-range" class="slider"></div>
                    </div>
                    <div class="price-range-wrap sm-width">
                        <div class="price-text">
                            <label for="priceRange">Price:</label>
                            <input type="text" id="priceRange" name="price_range" readonly>
                        </div>
                        <div id="price-range" class="slider"></div>
                    </div>
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
                            <li data-filter="all" onclick="pageRedirect(this)">All</li>
                            <li data-filter=".apart" onclick="pageRedirect(this)">Tiles</li>
                            <li data-filter=".house" onclick="pageRedirect(this)">Bathware</li>
                            <li data-filter=".office" onclick="pageRedirect(this)">Electricals</li>
                            <li data-filter=".hotel" onclick="pageRedirect(this)">Commode</li>
                            <li data-filter=".restaurent" onclick="pageRedirect(this)">Vanity Basin</li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
                function pageRedirect(pageLocation) {
                    url = pageLocation.innerText;
                    if (url == "All") {
                        window.location.href = './result?productType';
                    } else {
                        window.location.href = './result?productType=' + url;
                    }
                }

                function product_redirect(id) {
                    window.location.href = './product-details?id=' + id;
                }
            </script>
            <div class="row">

                <?php
                // Database connection
                $servername = "localhost";
                $username = "osrtraders_epravidi";
                $password = "UQ!r.gTOz=oo";
                $dbname = "osrtraders_epravidi_osrt";

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
                        echo '<div class="pi-pic set-bg" style="background-size:contain; image-rendering:auto" data-setbg="https://www.panelpro.osrtraders.com/pages/product_image/' . htmlspecialchars($row["image"]) . '">';
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
                        <p>OSRT is a leading trading company specializing in high-quality construction equipment,
                            materials, bathware, and hardware. With a commitment to excellence and innovation, OSRT
                            caters to both residential and commercial projects, offering a wide range of products to
                            meet diverse needs.</p>
                    </div>
                    <div class="chooseus-features">
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-1.png" class="cfImg" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Home Delivery</h5>
                                <p>Fast, reliable delivery right to your door</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-2.png" class="cfImg" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Sales & Discounts</h5>
                                <p>Premium products at competitive prices</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-3.png" class="cfImg" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>Quality Assurance</h5>
                                <p>Guaranteed high standards for durability and performance</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-4.png" class="cfImg" alt="">
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
                            <img src="img/logo-carousel/asianpaints.jpeg" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/EMTOP.jpeg" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/jaguarworld.jpeg" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/Parryware.jpeg" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/Pioneer-Cable.jpeg" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/RATHI-FRLS-CABLE.jpeg" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/Roca.jpeg" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/Schneider.jpeg" alt="">
                        </div>
                    </a>
                    <a href="#" class="lc-item">
                        <div class="lc-item-inner">
                            <img src="img/logo-carousel/Somany.jpeg" alt="">
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
                                <p>Khumaltar-15, Satdobato Road, Lalitpur</p>
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
                                <p>info@osrtraders.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4173.916163515737!2d85.32849037479467!3d27.653187787351264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1780d7621ea1%3A0x8b58e862052fa651!2sOSR%20TRADERS%20Pvt.Ltd.!5e0!3m2!1sen!2snp!4v1726069735507!5m2!1sen!2snp"
                height="450" style="border:0;" allowfullscreen="">
            </iframe>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- chatbot -->

    <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
    <script src="https://files.bpcontent.cloud/2024/11/12/13/20241112133346-PL5ZLF1B.js"></script>


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
                        <p>Be sure to follow us on our social media platforms. Stay informed about industry trends, new
                            products, and expert tips to keep your projects on the cutting edge.</p>
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
                            <li><a href="https://osrt.epravidi.com/files/privacypolicy.pdf" download="privacypolicy.pdf">Privacy Policy</a></li>
                            <li><a href="#">Contact Support</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="https://osrt.epravidi.com/files/returnpolicy.pdf" download="returnpolicy.pdf">Return Policy</a></li>
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

                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> OSR Traders. All rights reserved | Forged by <a href="https://www.epravidi.com"
                    target="_blank">E-pravidi Pvt. Ltd.</a>
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