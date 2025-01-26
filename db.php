<?php
$serverName = "tcp:dbserverdotiofran.database.windows.net,1433"; // Substitua pelo seu servidor
$database = "banco001"; // Substitua pelo seu banco de dados
$user = "sql"; // Substitua pelo seu usuário
$password = "Password#123456"; // Substitua pela sua senha

try {
    // Cria a conexão com o banco de dados usando PDO
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    die();
}
?>
