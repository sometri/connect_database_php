<!-- 
    2. MySQLi Procedural:

    Pros:
    Direct, familiar syntax for those used to MySQL
    Supports older PHP versions

    Code example: 
-->
<?php
    $servername = "localhost";
    $username = "yourusername";
    $password = "yourpassword";
    $dbname = "mydatabase";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>