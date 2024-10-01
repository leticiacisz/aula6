<?php

include 'db.php';

if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $nome_conteudo = $_POST ['nome_conteudo']?? null;
    $conteudo_nota = $_POST ['conteudo_nota']?? null;

    $sql = "INSERT INTO usuario (nome_conteudo, conteudo_nota ) VALUES ('$nome_conteudo', '$conteudo_nota')";


    if ($conn->query($sql) === TRUE) {
        echo "Novo registro adicionado!"; 
    } else{
        echo "Erro:" . $sql . "<br>" . $conn -> error;
    }
     
    $conn -> close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário </title>
</head>
<body>
    <h1>Criar  usuário:</h1>
<form method="post" action="createProfessor.php">
    Nome: <input type="text" name="nome" required><br><br>
    Idade: <input type="number" name="idade" required><br><br>
    Matéria Professor: <input type="text" name="materia" required><br><br>
    <input type="submit" value="Adicionar usuário" class="adicionar">
    <button type="button" onclick="window.location.href='readProfessor.php';" class="registros">Ver registros</button>
    <button type="button" onclick="window.location.href='index.html';" class="registros">Voltar a página inicial</button>  

</form>
</body>
</html>

</form>