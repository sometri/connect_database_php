<!-- 
    2. PostgreSQL:
    Using the PDO extension:
-->
<?php
    $host = "localhost";
    $port = "5432";
    $dbname = "database_name";
    $user = "username";
    $password = "password";

    try {
        $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
