<?php
$serverName = "tcp:sqlserver63ujiagifce6s.database.windows.net,1433"; // Seu servidor
$database = "sampledb"; // Seu banco de dados
$username = "sql"; // Seu usuário SQL
$password = "P@$$W)RD1234"; // Sua senha

try {
    // Cria a conexão com o banco de dados usando PDO com o ODBC Driver 17
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    die();
}
?>
