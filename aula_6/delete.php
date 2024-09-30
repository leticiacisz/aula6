<?php

include 'db.php';

$id_conteudo = $_GET['id_conteudo']

$sql = "DELETE FROM conteudo WHERE id_conteudo=$id_conteudo";

if ($conteudo_nota->query($sql) === TRUE) {
    echo "Registro excluído com sucesso";
} else {
    echo "Erro: " . $id_conteudo . "<br>" . $conteudo_nota->error;
}

$conn -> close();

header ("Location: read.php");
exit();

?>