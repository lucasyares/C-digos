<?php
$estado = array("SC", "PR", "RS", "SP");
echo "Original";
print_r($estado);
for($i = 0; $i < count($estado); $i++){
 $estado[$i] = strtolower($estado[$i]);
}
echo "STRTOLOWER:"; print_r($estado);
echo "<hr> SHIFT: retira o primeiro elemento do array! </hr>";
echo "SHIFT:";
print_r(array_shift($estado));
echo "<hr>POP: extai um elemento final do array; </hr> <br>";
echo "POP:";
print_r(array_pop($estado));
echo "<br><hr>PUSH: Adiciona 1 ou mais elementos no final da Array</hr>";
print_r(array_push($estado,"SC"));
echo "<hr>REVERSE: deixa o array com elementos em ordem inversa</hr><br>";
print_r(array_reverse($estado));
echo "<hr>SORT: Ordena um Array</hr> <br>";
print_r(sort($estado));
echo "<hr> SLICE: Extrai uma parcela de um array</hr><br>";
print_r(array_slice($estado, 1, 2));



?>