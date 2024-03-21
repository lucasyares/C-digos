
<?php
$name = "Stefanie Hatcher";
echo "Nome: ", $name, "<br>";
$lenght = strlen($name);
echo "Length: ", $lenght, "<br>";
$cmp = strcmp($name, "Brian Le");
echo "CMP: ", $cmp, "<br>\n";
$index = strpos($name, "e");
echo "Index: ", $index, "<br>\n";
$first = substr($name, 9, 5);
echo "First: ", $first, "<br>\n";
$name = strtoupper($name);
echo "Name: ", $name, "<br>";
?>
