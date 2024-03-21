<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procura</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'comandos.php'; navbar();?>

    <main class="main">
        <form class="info_box" action="atual.php" method="post">
            <h1>Atualizar</h1>
            <div class="input_wrap">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id">
            </div>
            <div class="btn_wrap">
                <button type="submit">Procurar</button>
            </div>
        </form>
    </main>
</body>

</html>