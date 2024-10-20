<?php
// Database connection function
function connectToDatabase() {
    $servername = "192.250.235.20";  // Replace with your server name
    $username = "epravidi_osrt_data";   // Replace with your database username
    $password = "UQ!r.gTOz=oo";      // Replace with your database password
    $dbname = "epravidi_osrt";       // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to select products based on input
function getProducts($conn, $materials, $general_color, $brand, $product_type, $price_range, $no_of_products) {
    // Start with a base SQL query
    $sql = "SELECT * FROM products WHERE 1=1";

    // Add conditions based on input values
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

    // Filter by price range if available (assuming price range format is "min-max")
    if (!empty($price_range)) {
        $price_parts = explode("-", $price_range);
        if (count($price_parts) == 2) {
            $min_price = (float)$price_parts[0];
            $max_price = (float)$price_parts[1];
            $sql .= " AND price BETWEEN $min_price AND $max_price";
        }
    }

    // // Add No of Products filter if needed
    // if (!empty($no_of_products)) {
    //     // Assuming no_of_products is in ranges like "1-100", "100-1000", etc.
    //     $products_parts = explode("-", $no_of_products);
    //     if (count($products_parts) == 2) {
    //         $min_products = (int)$products_parts[0];
    //         $max_products = (int)$products_parts[1];
    //         $sql .= " AND stock BETWEEN $min_products AND $max_products";
    //     } elseif ($no_of_products == '10000+') {
    //         $sql .= " AND stock >= 10000";
    //     }
    // }

    // Execute query
    $result = $conn->query($sql);

    // Check if results found
    if ($result && $result->num_rows > 0) {
        // Fetch all results as an associative array
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Main logic to collect inputs and query the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect individual form inputs
    $materials = isset($_POST['materials']) ? $_POST['materials'] : '';
    $general_color = isset($_POST['general_color']) ? $_POST['general_color'] : '';
    $brand = isset($_POST['brand']) ? $_POST['brand'] : '';
    $product_type = isset($_POST['product_type']) ? $_POST['product_type'] : '';
    $no_of_products = isset($_POST['no_of_products']) ? $_POST['no_of_products'] : '';
    $price_range = isset($_POST['price_range']) ? $_POST['price_range'] : '';

    // Connect to the database
    $conn = connectToDatabase();

    // Get products based on the inputs
    $products = getProducts($conn, $materials, $general_color, $brand, $product_type, $price_range, $no_of_products);

    // Close the database connection
    $conn->close();

    // Display the products
    if (!empty($products)) {
        echo "<h2>Products:</h2>";
        foreach ($products as $product) {
            echo "<div>";
            echo "<h3>" . htmlspecialchars($product['product_name']) . "</h3>";
            echo "<p>Brand: " . htmlspecialchars($product['brand']) . "</p>";
            echo "<p>Material: " . htmlspecialchars($product['material']) . "</p>";
            echo "<p>Color: " . htmlspecialchars($product['color']) . "</p>";
            echo "<p>Price: $" . number_format($product['price'], 2) . "</p>";
            echo "<p>Stock: " . htmlspecialchars($product['stock']) . "</p>";
            echo "<img src='" . htmlspecialchars($product['image']) . "' alt='Product Image' style='width:150px;height:150px;'/>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>No products found matching your criteria.</p>";
    }
}
?>
