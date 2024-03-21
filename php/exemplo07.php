<?php
$sorteio = rand(0,5);
echo "Sorteado: $sorteio <hr>";
$vetor = array_merge(range(0,10), range($sorteio,10,2), array($sorteio));
print_r($vetor);
echo "<hr>";
shuffle($vetor);
print_r($vetor);
echo "<hr>";
foreach($vetor as $valor)
{
    echo 'O valor ', $valor, ' tem 3 elementos.<hr>';
    
}
?>