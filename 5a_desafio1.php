<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form action="" method="post">
        <h2>Verificador de idade</h2>

        <label for="nome">Nome: </label>
        <input type="text" name="nome" required><br>

        <label for="AnoNascimento">Ano de nascimento: </label>
        <input type="number" name="ano_nascimento" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
        // Recebe os valores
        $nome = $_POST['nome'];
        $AnoNascimento = $_POST['ano_nascimento'];
        $idade = date('Y') - $AnoNascimento;

    if ($idade <= 18) {

        echo "<h2>Acesso Permitido, $nome!</h2>";
        $arquivo = fopen('log_acessos.txt', 'a');

        $linha = $nome . ";" . $AnoNascimento . "\n";

        fwrite($arquivo, $linha);

        // Fechar o arquivo
        fclose($arquivo);

        // Mensagem
        echo "<p>Usuário cadastrado com sucesso!</p>";
    } else {

        echo "<h2>Acesso Não permitido!</h2>";
    }

    ?>
</body>

</html>