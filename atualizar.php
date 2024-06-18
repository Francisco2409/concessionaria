<?php
require_once "connection.php";

if($_GET['id']) {
$id = $_GET['id'];

$sql = "SELECT * FROM teste WHERE id = $id";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$nome = $row['nome'];
$email = $row['email'];
} else {
    echo"usuario nao encontrado.";
    exit;
}
 $mysqli->close();

}

?>
<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONCESSIONARIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Atualizar Usuario</h2>
        <form action="atualizar_usuario.php" method="POST">

            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id);?>">
            <label for = "name">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"> 
            <button type="submit">Atualizar</button>
        </form>
        <button class="back-button" onclick="window.location.href='exibir.php'">voltar a lista</button>
    </div>
</body>
</html>
