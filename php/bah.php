<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .line{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    function H_indefinid(){
    for ($i=1; $i < 7 ; $i++) { 
        echo "<h$i> Este é o H$i, top";
    }
}
?>
<div class="line">
<?= H_indefinid()?>
</div>
    
</body>
</html>