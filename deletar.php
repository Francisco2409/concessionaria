<?php
require_once "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE from teste WHERE id = $id";

    if($mysqli->query($sql)===TRUE) {
        echo "UsuARIO APAGADO COOM SUCESSO.";
    }else{
        echo "ERRO AO DELETAR USUARIO:";
    }

    $mysqli->close();
}

?>

<BUTTON onclick="window.location.href='exibir.php'">voltar a lista</button>