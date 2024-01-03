<!-- 
    3. SQLite:
    Using the PDO extension:
-->
<?php
    $dbname = "path_to_sqlite_file.db";

    try {
        $conn = new PDO("sqlite:$dbname");
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>

