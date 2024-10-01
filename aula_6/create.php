<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_conteudo = $_POST['id_conteudo'] ?? null;
    $nome_conteudo = $_POST['nome_conteudo'] ?? null;
    $conteudo_nota = $_POST['conteudo_nota'] ?? null;

    $sql = "INSERT INTO conteudo (id_conteudo, nome_conteudo, conteudo_nota) VALUES ('$id_conteudo', '$nome_conteudo', '$conteudo_nota')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar notas</title>
</head>
<body>
   <form method="post" action="create.php">
    <h1>Criar Notas:</h1>
    Nome do Conteudo: <input type="text" name="nome_conteudo" required><br><br>
    Conteudo Nota: <input type="text" name="conteudo_nota" required><br><br>
    <br>
    <input type="submit" value="Adicionar nota" class="adicionar">
    <button type="button" onclick="window.location.href='read.php';" class="registros">Ver registros</button>  
</form>
</body>
</html>