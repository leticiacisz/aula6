<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_conteudo = $_POST['id_conteudo'];
    $nome_conteudo = $_POST['nome_conteudo'];
    $conteudo_nota = $_POST['conteudo_nota'];

    $sql = "INSERT INTO user (id_conteudo, nome_conteudo, conteudo_nota) VALUES ('$id_conteudo', '$nome_conteudo', '$conteudo_nota')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form method="POST">
        <label for="id_conteudo">Nome:</label>
        <input type="text" id="id_conteudo" name="id_conteudo" required>
        <label for="nome_conteudo">E-mail:</label>
        <input type="nome_conteudo" id="nome_conteudo" name="nome_conteudo" required>
        <button type="submit">Enviar</button>
    </form>
    <a href="read.php">Ver registros.</a>
</body>
</html>