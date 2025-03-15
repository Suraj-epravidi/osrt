<?php
// Database connection function
function connectToDatabase() {
    $servername = "localhost"; // Replace with your server name
    $username = "osrtraders_epravidi"; // Replace with your database username
    $password = "UQ!r.gTOz=oo"; // Replace with your database password
    $dbname = "osrtraders_epravidi_osrt"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to handle form submission
function handleContactForm($conn) {
    // Collect form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $website = isset($_POST['website']) ? trim($_POST['website']) : '';
    $comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';

    // Validate required fields
    if (!empty($name) && !empty($email) && !empty($comment)) {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO contact_form (name, email, website, comment) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $website, $comment);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: ./index?alert_message=Thank you for your message. We will get back to you shortly!");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Please fill in all required fields.";
    }
}

// Main logic to check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $conn = connectToDatabase();

    // Handle the contact form
    handleContactForm($conn);

    // Close the database connection
    $conn->close();
}
?>



