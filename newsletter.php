<?php
// Database credentials
$host = "localhost";  // Replace with your server name
$username = "osrtraders_epravidi";   // Replace with your database username
$password = "UQ!r.gTOz=oo";      // Replace with your database password
$dbname = "osrtraders_epravidi_osrt";       // Replace with your database name

// Create a database connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if email is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        // Validate email format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Insert into database
            $stmt = $conn->prepare("INSERT INTO newsletter (newsletter_email) VALUES (:email)");
            $stmt->bindParam(':email', $email);

            if ($stmt->execute()) {
                header("Location: ./index?alert_message=Thank you for subscribing.");
            } else {
                echo "Error saving email.";
            }
        } else {
            echo "Invalid email format.";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
