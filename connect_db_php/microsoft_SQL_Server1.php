<!-- 
    2. Using sqlsrv Extension:
    To use the sqlsrv extension, you need to make sure that it is enabled in your PHP configuration. Then you can connect to the Microsoft SQL Server database using the following PHP code: 
-->
<?php
    $serverName = "localhost";
    $connectionOptions = array(
        "Database" => "your_database_name",
        "Uid" => "your_username",
        "PWD" => "your_password"
    );

    // Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn) {
        echo "Connected successfully";
    } else {
        echo "Connection failed";
    }
?>
