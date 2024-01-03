<!-- 
    3. MySQLi Object-Oriented:

    Pros:
    Object-oriented approach for better organization
    Access to properties and methods

    Code example: (same as the original code you provided) 
-->
<?php
    $servername = "localhost";
    $username = "yourusername";
    $password = "yourpassword";
    $dbname = "mydatabase";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>