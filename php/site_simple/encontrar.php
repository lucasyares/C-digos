<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'comandos.php'; navbar();?>
    <main class="main">
        
        <?php
        if (isset($_POST["nome"])) {
            $nome = $_POST["nome"];
            $conexao = new mysqli("127.0.0.1", "root", "", "crud_yares");
            if ($conexao->connect_errno) {
                echo "Ocorreu um erro na conexão com o banco de dados.";
                exit;
            }
            $conexao->set_charset("utf8");
            
            $sql = "SELECT * from `cliente` WHERE nome='$nome';";
            echo '<h1>Encontrar</h1>';
            echo '<p class="code">'.$sql.'</p>';
            
            $result = $conexao->query($sql);
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nome</th>";
                echo "<th>E-mail</th>";
                echo "<th>Cidade</th>";
                echo "<th>UF</th>";
                echo "</tr>";
                while ($linha = $result->fetch_assoc()) {
                    echo "<tr>";
                    
                    echo "<td>" . $linha["id"] . "</td>";
                    echo "<td>" . $linha["nome"] . "</td>";
                    echo "<td>" . $linha["email"] . "</td>";
                    echo "<td>" . $linha["cidade"] . "</td>";
                    echo "<td>" . $linha["uf"] . "</td>";
                    
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Sem resultados para '$nome'</p>";
            }
            
            $conexao->close();
        }
        ?>
        </table>
    </main>
</body>

</html>