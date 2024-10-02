<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:sqlserver63ujiagifce6s.database.windows.net,1433; Database = sampledb", "sql", "P@$$W)RD1234");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "sql", "pwd" => "P@$$W)RD1234", "Database" => "sampledb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sqlserver63ujiagifce6s.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>


