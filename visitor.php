<?php
// Database connection settings
$host = "192.250.235.20";
$username = "epravidi_osrt_data";
$password = "UQ!r.gTOz=oo";
$dbname = "epravidi_osrt";

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get the visitor's IP address
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Check if the same IP visited within the last minute
    $stmt = $pdo->prepare("SELECT visited_at FROM visitors WHERE ip_address = :ip_address ORDER BY visited_at DESC LIMIT 1");
    $stmt->execute(['ip_address' => $ip_address]);
    $lastVisit = $stmt->fetch(PDO::FETCH_ASSOC);

    // Insert only if there was no visit in the last minute
    if (!$lastVisit || strtotime($lastVisit['visited_at']) < strtotime('-1 minute')) {
        // Insert a new record
        $stmt = $pdo->prepare("INSERT INTO visitors (ip_address, visited_at) VALUES (:ip_address, CURRENT_TIMESTAMP)");
        $stmt->execute(['ip_address' => $ip_address]);
        
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>