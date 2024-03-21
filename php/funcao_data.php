<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
<input type="text" name="senha">
</form>
    <?php
    $senha_user = $_GET['senha'];
    $senha_cry = md5($senha_user);
    $senha_quebrar = "59e93fe27a2934c1d9ceb6e3ca2bcfb4";//PAULO
    if ($senha_cry == $senha_quebrar){
        echo "Senha encontrada:", $senha_user, "<br>";
    }else {
        echo "Senha não encontrada. <br>";
    }
    echo "senha=",$senha_user,"<br>senha com md5=",$senha_cry;
    date_default_timezone_set('America/Los_Angeles');
    $TimeHJ = date("d/m/Y", time());
    ?>
    <p align="center"> Hoje é dia <?php echo $TimeHJ ;?></p>
</body>
</html>
