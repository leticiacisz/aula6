<?php

include 'db.php';

$sql = "SELECT * FROM user";

$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    echo "<table border='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Data de Criação </th>
            <th> Ações </th>
        </tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
                    <td> {$row['id']} </td>
                    <td> {$row['name']} </td>
                    <td> {$row['email']} </td>
                    <td> {$row['created_at']} </td>
                    <td>
                        <a href='update.php?id={$row['id']}'>Editar</a> |
                        <a href='delete.php?id={$row['id']}'>Excluir</a>
                    </td>
                </tr>";
        }
    echo "</table>";
}else{
    echo "Nenhum registro encontrado.";
}
$conn -> close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <?php foreach ($users as $user): ?>
    <div>
        <p>Nome: <?= $user["name"]?> </p>
        <p>Email: <?= $user["email"]?> </p>
        <a href="update.php?id=<?= $user["id"]?>">Alterar</a>
        <a href="delete.php?id=<?= $user["id"]?>">Deletar</a>
    </div>
    <hr>
    <?php endforeach ?>
</body>
</html>