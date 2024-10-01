<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Registros</title>
</head>
<body>
<br>



<?php

include 'db.php';

$sql = "SELECT * FROM conteudo";

$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Conteudo </th>
        </tr>";
        while($row = $result -> fetch_assec()) {
            echo "<tr>
                    <td> {$row['id_conteudo']} </td>
                    <td> {$row['name_conteudo']} </td>
                    <td> {$row['conteudo_nota']} </td>
                    <td>
                        <a href='update.php?id_conteudo={$row['id_conteudo']}'>Editar</a>
                        <a href='delete.php?id_conteudo={$row['id_conteudo']}'>Excluir</a>
                    </td>
                </tr>";
        }
    echo "</table>";
}else{
    echo "Nenhum registro encontrado.";
}
$conn -> close();

?>

<script>
function confirmDelete(id) {
    if (confirm("Você tem certeza que deseja excluir este registro?")) {
        window.location.href = 'delete.php?id_conteudo=' + id; 
    }
}
</script>
<br>
</body>
</html>