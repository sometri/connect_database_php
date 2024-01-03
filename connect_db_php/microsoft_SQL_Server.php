<!-- 
    1. Using PDO with SQL Server Driver for PHP:
    First, you need to ensure that you have the SQL Server Driver for PHP installed. Then you can use the following PHP code to connect to a Microsoft SQL Server database: 
-->
<?php
    $serverName = "localhost";
    $connectionOptions = array(
        "Database" => "your_database_name",
        "Uid" => "your_username",
        "PWD" => "your_password"
    );

    // Establishes the connection
    $conn = new PDO("sqlsrv:Server=$serverName;Database={$connectionOptions['Database']}", $connectionOptions['Uid'], $connectionOptions['PWD']);

    if ($conn) {
        echo "Connected successfully";
    } else {
        echo "Connection failed";
    }
?>

