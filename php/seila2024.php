<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        table{
            border-collapse: collapse;
            text-align: center;
        }
        th, td{
            border-style: solid;
            width: 50px;
        }
    </style>
</head>
<body>
    <?php
    function sor_quer()
    {

 for ($i=0; $i <= 5 ; $i++)
{

     echo "<tr>";
 for ($c=0; $c <= 20 ; $c++) {echo "<td> $i, $c </td>";}

}
 echo "</tr>";
    }
    ?>

<table>
<?= sor_quer()?>
</table>
<hr>
<table>
<?= sor_quer()?>
</table>
</hr>
<hr>
<table>
<?= sor_quer()?>
</table>
</hr>
<hr>
<table>
<?= sor_quer()?>
</table>
</hr>
<hr>
<table>
<?= sor_quer()?>
</table>
</hr>
</body>
</html>