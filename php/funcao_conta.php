<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function separado($str, $separado = ", ")
{
    if(strlen($str) > 0){
        print $str[0];
        for ($i=1; $i < strlen($str); $i++) { 
            print $separado . $str[$i];
        }
    }
}
?>
<p>Separando as letras</p>
<p> <?=separado("Wellington")?></p>
<p> <?=separado("Wellington", "-")?></p>
</body>
</html>