<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>

<body>

    <h1>Lista dos Clientes</h1>

    <?php
    include 'comando.php';
    estilo_()

    $conexao = new mysqli("127.0.0.1", "root", "", "crud_yares");
    if ($conexao->connect_errno) {
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
    $conexao->set_charset("utf8");
    $sql = "SELECT * from `cliente`;";

    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        while ($linha = $result->fetch_assoc()) {
            echo "Nome:" . $linha["nome"] . "<br>";
            echo "Email:" . $linha["email"] . "<br>";
            echo "Cidade:" . $linha["cidade"] . "<br>";
            echo "UF:" . $linha["uf"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Sem resultados";
    }

    $conexao->close();

    ?>
    <br><br><a href='form.php'>Voltar</a>
</body>

</html>