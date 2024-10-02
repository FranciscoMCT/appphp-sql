<?php
$serverName = "tcp:tiofranserverdb.database.windows.net,1433"; // Substitua pelo seu servidor
$database = "loja"; // Substitua pelo seu banco de dados
$username = "tiofranserverdb-admin"; // Substitua pelo seu usuário
$password = "sk6y5RJ5rm$R$bhI"; // Substitua pela sua senha

try {
    // Cria a conexão com o banco de dados usando PDO
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    die();
}
?>

