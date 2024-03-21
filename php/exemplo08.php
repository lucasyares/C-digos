<?php
$vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
echo "Hello World of PHP <br>";
$cons = str_replace($vogais, "", "Hello World of PHP");
echo "Consoantes:".$cons, "<br>";
$test = "Hello World! \n";
print "Posição da letra 'o' :";
print strpos($test, "o"). "<br>";
print "Posição da letra 'o' após 5ª: ";
print strpos($test, "o",5)."<hr>";
$message = "trocar letra uma a uma";
echo $message."<br>";
$new_message = md5($message);
echo "criptografando: ". $new_message."<br>";
echo "descriptografando: ". $message;

echo crypt($message);
?>