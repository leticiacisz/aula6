<?php
    include 'db.php';

    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE user SET name='$name', email='$email' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn ->close();
        header ("Location: read.php");
        exit();
    }

    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php if ($user == null): ?>
        <h1>Usuário invalido </h1>    
    <?php else: ?>
        <form method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="<?= $user["name"] ?>" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?= $user["email"] ?>" required>
            <button type="submit">Atualizar</button>
        </form>
    <?php endif ?>
</body>
</html>