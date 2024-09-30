<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome_conteudo = $_POST['nome_conteudo'];
    $conteudo_nota = $_POST['conteudo_nota'];

    $sql = "UPDATE conteudo SET nome_conteudo='$nome_conteudo', conteudo_nota='$conteudo_nota' WHERE id=$id_conteudo";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn ->close();
    header ("Location: read.php");
    exit();
}

$sql = "SELECT * FROM conteudo WHERE id=$id_conteudo";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=" update.php?id_conteudo=<?php echo $row['id_conteudo'];?>">
    <label for="nome_conteudo">Nome</label>
    <input type="number" name="nome_conteudo" value="<?php echo $row['nome_conteudo']; ?>" required>
    <label for="conteudo_nota">Notas</label>
    <input type="text" name="conteudo_nota" value="<?php echo $row['conteudo_nota']; ?>" required>
    <input type="submit" value="Atualizar">
</form>

</body>
</html>

?>