<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database for crop price data
$sql = "SELECT * FROM crop_prices";
$result = $conn->query($sql);

// Process the data and use it in your application
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Access individual columns
        $cropName = $row["crop_name"];
        $price = $row["price"];
        // Do something with the data
    }
} else {
    echo "No data found";
}

// Close the connection
$conn->close();
?>