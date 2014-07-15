<?php
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = str_replace("/","",$rota['path']);

$indexaArray = ["" => 'home.php', 'empresa' => 'empresa.php', 'produtos' => 'produtos.php', 'servicos' => 'servicos.php', 'contato' => 'contato.php'];

$verificaRota = function($path) use ($indexaArray) {
    if(array_key_exists($path, $indexaArray)) {
        return $indexaArray[$path];
    } else {
        http_response_code(404);
        return '404.php';
    }
};
?>