<?php

require_once "connection.php"; 

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO teste (nome, email) VALUES ('$name', '$email')";

if ($mysqli->query($sql) === TRUE) {
    echo "Contato adicionado com sucesso";
} else {
    echo "Erro ao adicionar contato: " . $mysqli->error;
}

$mysqli->close();

?>

<button onclick="window.location.href='exibir.php'">voltar a lista</button>

