<?php
// Database configuration
$db_servername = "localhost"; // Change this to your database server name
$db_username = "your_db_username"; // Change this to your database username
$db_password = "your_db_password"; // Change this to your database password
$db_name = "your_db_name"; // Change this to your database name

try {
    // Create a PDO instance with mysqlnd driver
    $dsn = "mysql:host=$db_servername;dbname=$db_name";
    $conn = new PDO($dsn, $db_username, $db_password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $form_username = $_POST["username"];
        $form_password = $_POST["password"];

        // You can add validation and sanitation here if needed

        // SQL to insert data into database
        $sql = "INSERT INTO listik (username, passwd) VALUES (:username, :password)";

        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':username', $form_username);
        $stmt->bindParam(':password', $form_password);

        // Execute the SQL statement
        $stmt->execute();

        echo "New record created successfully";
    }
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close connection
$conn = null;
