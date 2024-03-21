<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Apaga</title>
</head>

<body>
    <?php 
    include 'comandos.php'; 
    navbar(); 
    ?>
    <main class="main">
        <h1>Apagando...</h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Se o formulário foi enviado
            
            function nul($dado) {
                return isset($_POST[$dado]);
            }
            
            function d($dado) {
                return $_POST[$dado];
            }
            
            if (!nul("id") || d("id") == "") {
                $erro = "Campo ID obrigatório";
            } else {
                $conexao = new mysqli("127.0.0.1", "root", "", "crud_yares");
                if ($conexao->connect_errno) {
                    echo "Ocorreu um erro na conexão com o banco de dados.";
                    exit;
                }
                
                $id = d("id");
                $result = $conexao->query("SELECT * from `cliente` WHERE id='$id';");
                if ($result->num_rows > 0) {
                    $stmt = $conexao->prepare("DELETE FROM `cliente` WHERE id='$id'");
                    
                    if (!$stmt->execute()) {
                        $erro = $stmt->error;
                    } else {
                        $sucesso = "Dado deletado com sucesso!";
                    }
                } else {
                    $erro = "Dado com ID = $id não existe!";
                }
            }

            if (isset($erro)) {
                echo '<div style="color:#F00">' . $erro . '</div>';
            }
            if (isset($sucesso)) {
                echo '<div style="color:#00F">' . $sucesso . '</div>';
            }
        }
        ?>
<br>
<br>
        <form id="deleteForm"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Apagar</h2>    
        <div>
            <label for="id">ID:</label>
                <input type="text" id="id" name="id">

            </div>
            <button type="button" class="del" onclick="submitForm()">Apagar Dado</button>
        </form>
    </main>

    <script>
        function submitForm() {
            // Submeter o formulário apenas quando o botão for clicado
            document.getElementById("deleteForm").submit();
        }
    </script>
</body>

</html>