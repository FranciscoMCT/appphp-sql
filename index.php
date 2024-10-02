<?php
require 'db.php';

// Inserir Produto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome']) && isset($_POST['preco'])) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    // Validações básicas
    if (!empty($nome) && is_numeric($preco)) {
        try {
            // Prepara e executa a inserção no banco de dados
            $stmt = $conn->prepare("INSERT INTO Produtos (Nome, Preco) VALUES (:nome, :preco)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':preco', $preco);
            $stmt->execute();

            echo "Produto inserido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao inserir produto: " . $e->getMessage();
        }
    } else {
        echo "Preencha todos os campos corretamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
</head>
<body>
    <h1>Bem-vindo à Loja</h1>

    <!-- Formulário para adicionar produto -->
    <form method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="preco">Preço:</label>
        <input type="text" name="preco" id="preco" required>
        <br>
        <button type="submit">Adicionar Produto</button>
    </form>

    <h2>Produtos Disponíveis</h2>
    <ul>
        <?php
        try {
            // Busca os produtos do banco de dados
            $stmt = $conn->query("SELECT * FROM Produtos");
            $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Lista os produtos
            foreach ($produtos as $produto) {
                echo "<li>ID: " . htmlspecialchars($produto['ID']) . 
                     " - Nome: " . htmlspecialchars($produto['Nome']) . 
                     " - Preço: " . htmlspecialchars($produto['Preco']) . "</li>";
            }
        } catch (PDOException $e) {
            echo "Erro ao buscar produtos: " . $e->getMessage();
        }
        ?>
    </ul>
</body>
</html>
