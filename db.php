<?php
$serverName = "tcp:sqlserver63ujiagifce6s.database.windows.net,1433"; // Substitua pelo seu servidor
$database = "sampledb"; // Substitua pelo seu banco de dados
$username = "sql"; // Substitua pelo seu usuário
$password = "Password#12324"; // Substitua pela sua senha

try {
    // Cria a conexão com o banco de dados usando PDO
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    die();
}
?>
