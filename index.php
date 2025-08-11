<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Fale conosco</h1>

    <form action="" method="post">
    <label for="nome">Nome:</label> <br>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="email">E-mail:</label> <br>
    <input type="email" name="email" id="email" required><br><br>

    <label for="mensagem">Mensagem:</label> <br>
    <input name="mensagem" id="mernsagem" rows="5" required><br><br>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    echo "<h2>Dados recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";

}
?>

</body>
</html>




