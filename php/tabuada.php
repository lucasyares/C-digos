<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""
<label for="">Number
    <input type="text" name="valor">
</label>
<button>Enviar</button>
</form>
    <?php
    $n = $_GET['valor'];

    $text = "Eu amo o professor, ele é muito bom";
    echo str_replace("professor", "PHP", $text);

    if($n <> NULL){
        for($i = 0; $i < 10; $i++){
          echo "<p>"."$n x $i =".$n * $i;"</p> <br>";
        }
    }else{
        $n = 1;
        for($i = 0; $i < 10; $i++){
            echo "<p>"."$n x $i =".$n * $i;"</p> <br>";
          }
    }

    ?>
</body>
</html>