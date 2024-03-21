<?php
$a = array();
$a[0] = 23;
echo nl2br($a[0]);

$a2 = array("\n Algumas ", " strings", " estao", " em", " array");
$a2[] = nl2br(" \n Resposta: Ooh");
var_dump($a2);

// for($i=0; $i<count($a2); $i++){
//     echo str_replace("Ooh", "genius", $a2[$i]);
// }


// for($i=0; $i<count($a2); $i++){
//     echo $a2[$i];
// }
?>