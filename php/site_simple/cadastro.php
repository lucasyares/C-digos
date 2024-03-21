<?php include 'comandos.php';?>
<?= estilo_()?>
<?= navbar()?>
<?php
echo '<main>';
// VALIDADE A EXISTÊNCIA DE DADOS
// carai bicho
function nul($dado) // Abreviação para ver se o dado existe e é diferente de NULL
{
    return isset($_POST[$dado]);
}

function d($dado) // Abreviação para pegar a variavel do POST
{
    return $_POST[$dado];
}

if (nul("nome") && nul("email") && nul("cidade") && nul("uf")) {
    if (!nul("nome") || d("nome") == "") {
        $erro = "Campo nome obrigatório";
        echo d("nome") . nul("nome");
    } elseif (!nul("email") || d("email") == "") {
        $erro = "Campo email obrigatório";
    } else {
        $conexao = new mysqli("127.0.0.1", "root", "", "crud_yares");
        if ($conexao->connect_errno) {
            echo "Ocorreu um erro na conexão com o banco de dados.";
            exit;
        }

        $nome = d("nome");
        $email = d("email");
        $cidade = d("cidade");
        $uf = d("uf");

        $stmt = $conexao->prepare("INSERT INTO `cliente` (nome, email, cidade, uf) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $nome, $email, $cidade, $uf);

        if (!$stmt->execute()) {
            $erro = $stmt->error;
        } else {
            $sucesso = "Dados cadastrados com sucesso!";
        }
    }
}

if (isset($erro)) {
    echo '<div style="color:#F00">' . $erro . '</div>';
}
if (isset($sucesso)) {
    echo '<div style="color:#00F">' . $sucesso . '</div>';
}
echo '</main>';

?>
