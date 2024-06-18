<?php
require_once "connection.php";

$sql = "SELECT * FROM automovel";
$result = $mysqli->query($sql);

$mysqli->close();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir dados</title>
</head>
<body>
    <div class="container">
        <h2>Lista de usuários</h2>
        <button onclick="window.location.href='automovel.html'"></button>
        <div class="users_list">
            <?php
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>montadora</th><th>modelo</th><th>ações</th><th>ano</tr></th>modelo_ano</th><th>cor</th>";
                while ($row = $result->fetch_assoc()) {   //while = enquanto
                    echo "<tr>";
                    echo "<td>" . $row['montadora'] . "</td>";
                    echo "<td>" . $row['modelo'] . "</td>";
                    echo "<td>" . $row['ano'] . "</td>";
                    echo "<td>" . $row['modelo_ano'] . "</td>";
                    echo "<td>" . $row['cor'] . "</td>";
                    echo "<td>";
                    echo "<button onclick=\"window.location.href='atualizar.php?id=" . $row['id'] . "'\">Atualizar</button>";
                    echo "<button onclick=\"window.location.href='deletar.php?id=" . $row['id'] . "'\">Deletar</button>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Nenhum usuário encontrado.</p>";
            }

            ?>
        </div>
    </div>
    
</body>
</html>