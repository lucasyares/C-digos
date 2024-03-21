<?php

function estilo(){
    echo '<link rel="stylesheet" href="style.css">';
}
function estilo_(){
    echo '<head><link rel="stylesheet" href="style.css"></head>';
}
function navbar() {
    echo "
    <nav class='nav'>
    <menu>
    <h2>INDEX</h2>
        <li><a href='form.php'>Cadastrar</a></li>
        <li><a href='listar2.php'>Listar</a></li>
        <li><a href='procura.php'>Procurar</a></li>
        <li><a href='atualizar.php'>Atualizar</a></li>
        <li><a href='apagar.php'>Apagar</a></li>
        <li><a href='menu.php'>Voltar</a></li>
    </menu>
</nav>
";

}

?>
