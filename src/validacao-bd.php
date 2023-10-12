<?php
require './src/conexao-bd.php';
require './src/validacao-bd.php';

// Inicializar a array de erros
$errors = [];

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter as credenciais do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consultar o banco de dados para obter o usuário com o e-mail fornecido
    $query = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
    
    try {
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar se o usuário existe e a senha está correta
        if ($user && password_verify($senha, $user['senha'])) {
            // Redirecionar para a página de sucesso (substitua 'index.php' pelo seu destino)
            header('Location: index.php');
            exit();
        } else {
            // Adicionar mensagem de erro
            $errors[] = "Credenciais inválidas. Por favor, tente novamente.";
        }
    } catch (PDOException $e) {
        // Lidar com erros de consulta ou conexão aqui, se necessário
        $errors[] = "Erro ao acessar o banco de dados.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- ... (seu código HTML para o cabeçalho) ... -->
</head>
<body>
    <main>
        <section class="container-admin-banner">
            <!-- ... (seu código HTML para a seção do banner) ... -->
        </section>
        <section class="container-form">
            <form method="post" action="./src/validacao-bd.php">
                <!-- ... (seu código HTML para o formulário) ... -->

                <!-- Exibir mensagens de erro -->
                <div class="divCheck2">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
