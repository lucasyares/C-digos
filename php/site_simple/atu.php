<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atualizado</title>
</head>

<body>
    <?php include 'comandos.php';?>
    <?= navbar()?>
    <main class="main">
        <h1>Atualizado</h1>
        <?php
        if (isset($_POST["id"])) {
            $conexao = new mysqli("127.0.0.1", "root", "", "crud_yares");
            if ($conexao->connect_errno) {
                echo "Ocorreu um erro na conexão com o banco de dados.";
                exit;
            }
            $conexao->set_charset("utf8");

            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cidade = $_POST["cidade"];
            $uf = $_POST["uf"];

            $sql = "UPDATE `cliente` SET nome='$nome', email='$email', cidade='$cidade', uf='$uf' WHERE id='$id';";

            echo '<p class="code">'.$sql.'</p>';

            if ($conexao->query($sql)) {
                $sucesso = "Alterado com sucesso!";
            } else {
                $erro = "Erro: " . $sql . "<br>" . $conexao->error;
            }

            $conexao->close();
        }

        if (isset($erro)) {
            echo '<p style="color:#F00">' . $erro . '</p>';
        }
        if (isset($sucesso)) {
            echo '<p style="color:#00F">' . $sucesso . '</p>';
        }
        ?>
    </main>
</body>

</html>