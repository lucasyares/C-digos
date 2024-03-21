<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD básico com PHP</title>
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
        <form class="info_box" action="cadastro.php" method="post">
            <h1>Cadastrar</h1>
            <div class="input_wrap">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" maxlength="50">
            </div>
            <div class="input_wrap">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" maxlength="150"></>
            </div>
            <div class="input_wrap">
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="cidade" maxlength="100">
            </div>
            <div class="input_wrap">
                <label for="uf">UF:</label>
                <input type="text" name="uf" id="uf" maxlength="2">
            </div>
            <div class="btn_wrap">
                <button type="submit">Enviar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </main>
</body>

</html>