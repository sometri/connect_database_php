<!-- 
    1. PDO (PHP Data Objects):

    Pros:
    Consistent interface for different database types
    Prepared statements for security
    Parameterized queries for flexibility
    
    Code example: 
-->

<?php
    $servername = "localhost";
    $username = "yourusername";
    $password = "yourpassword";
    $dbname = "mydatabase";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set error mode to exceptions
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>