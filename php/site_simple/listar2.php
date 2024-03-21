<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'comandos.php';
    navbar(); ?>
    <main class="main">

        <h1>Lista de clientes</h1>
        <section>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Cidade</th>
                    <th>UF</th>
                </tr>

                <?php
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
                        echo "<tr>";

                        echo "<td>" . $linha["id"] . "</td>";
                        echo "<td>" . $linha["nome"] . "</td>";
                        echo "<td>" . $linha["email"] . "</td>";
                        echo "<td>" . $linha["cidade"] . "</td>";
                        echo "<td>" . $linha["uf"] . "</td>";

                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<td>--</td>";
                    }
                    echo "</tr>";
                }
                $conexao->close();
                ?>
            </table>
        </section>
    </main>
</body>

</html>