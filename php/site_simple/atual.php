<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .main label {
            text-align: right;
            width: 4em;
        }
    </style>
</head>

<body>
    <?php include 'comandos.php'; navbar();?>
    <main class="main">
        <?php
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            $conexao = new mysqli("127.0.0.1", "root", "", "crud_yares");
            if ($conexao->connect_errno) {
                echo "Ocorreu um erro na conexão com o banco de dados.";
                exit;
            }
            $conexao->set_charset("utf8");
            
            $sql = "SELECT * from `cliente` WHERE id='$id';";
            // echo $sql . "<br><br>";
            $result = $conexao->query($sql);
            
            if ($result->num_rows > 0) {
                while ($linha = $result->fetch_assoc()) {
                    $id = $linha["id"];
                    $nome = $linha["nome"];
                    $email = $linha["email"];
                    $cidade = $linha["cidade"];
                    $uf = $linha["uf"];
                   
                }
                echo "
                <form class='info_box' action='atu.php' method='post'>
                <h1>Atualizar Dados</h1>
                <input type='hidden' name='id' id='id' value='$id'>
                <div class='input_wrap'>
                <label for='nome'>Nome:</label>
                <input type='text' name='nome' id='nome' value='$nome'>
                </div>
                <div class='input_wrap'>
                <label for='email'>E-mail:</label>
                <input type='text' name='email' id='email' value='$email'>
                </div>
                <div class='input_wrap'>
                <label for='cidade'>Cidade:</label>
                <input type='text' name='cidade' id='cidade' value='$cidade'>
                </div>
                <div class='input_wrap'>
                <label for='uf'>UF:</label>
                <input type='text' name='uf' id='uf' value='$uf'>
                </div>
                <div class='btn_wrap'>
                <button type='submit'>Atualizar</button>
                </div>
                </form>
                ";
            } else {
                echo "Sem resultados";
            }

            $conexao->close();
        }
        ?>
    </main>
</body>

</html>