<?php

$nf = $_POST['num'];
$ns = $_POST['number'];
if(is_numeric($nf) && is_numeric($ns)){
    if(isset($nf) && isset($ns))
    {
        $nf = $_POST['num'];
        echo "Resultado  da soma = ". $nf + $ns;
        echo "<br>";
        echo "Resultado  da multiplicação = ". $nf * $ns;
        echo "<br>";
        echo "Resultado do input(2) como exp($nf^$ns) = ". $nf**$ns; 
        echo "<br>";
        echo "Resultado do input(1) como exp($ns^$nf) = ". $ns**$nf;
        echo "<br>";
        echo "Divisão = ". $ns/$nf;
        echo "<br>";
        echo "Sobra da divisão = ". $ns%$nf;

        if($nf % 2 === 0){
            echo "<br>Number(1) $nf é PAR";
        }
        else{
            echo "<br>Number(1) $nf é Ímpar";
        }
        
        if($ns % 2 === 0){
            echo "<br>Number(2) $ns é PAR";
        }
        else{
            echo "<br>Number(2) $ns é Ímpar";
        }
        for ($i=0; $i < 11; $i++) { 
            echo "<p> $nf x $i = ".$nf*$i."</p>";
        }
        echo "<hr>";
        for($j=0; $j < 11; $j++){
            echo "<p> $ns x $j = ".$ns*$j."</p>";
        }
    }}else{
        header('location: /lucasyares/form.php');
    }
    ?>