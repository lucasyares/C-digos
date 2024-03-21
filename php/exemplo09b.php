<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .linha {
            color: red;
            font-family: Arial;
        }
    </style>
</head>
<body>
    <div class="linha">
        <?php
        for ($i=0; $i < 10 ; $i++) { 
            echo "Vamos fazer algumas linhas $i <br>";
        }
        ?>
        <p>Parágrafo extra</p>
        <h2>A resposta é <?= 7**2 ?> </h2>
    </div>
    <p>Fora da Div</p>
</body>
</html>