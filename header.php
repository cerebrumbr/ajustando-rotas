<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <a class="brand" href="#">MENUS</a>
        <ul class="nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="index.php?local=01"">Empresa</a></li>
            <li><a href="index.php?local=02">Produtos</a></li>
            <li><a href="index.php?local=03">Serviços</a></li>
            <li><a href="index.php?local=04">Contato</a></li>
        </ul>
    </div>
</div>

<?php
if (isset($_GET['local'])){
    switch ($_GET['local']){
        case 01:
            include "empresa.php";
            break;
        case 02:
            include "produtos.php";
            break;
        case 03:
            include "servicos.php";
            break;
        case 04:
            include "contato.php";
            break;
    }
}else{
    include "chamada.php";
}
?>