<?php
$musicas = array(
array("Kid Abelha", 1992),
array("Musica 2", 1999),
array("Musica 3", 2000));

for($line = 0; $line < 3; $line++){
    for($column = 0; $column <2; $column++){
        echo $musicas[$line][$column], " ";
    }
    echo nl2br("\n");
}
?>



