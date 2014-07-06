<?php

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = str_replace("/","",$rota['path']);

$indexaArray = ['empresa' => 'empresa.php', 'produtos' => 'produtos.php', 'servicos' => 'servicos.php', 'contato' => 'contato.php'];

$verificaRota = function($path) use ($indexaArray) {
    if(array_key_exists($path, $indexaArray)) {
        return $indexaArray[$path];
    } else {
        http_response_code(404);
        return '404.php';
    }
};
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajustando Rotas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<?php

require_once("header.php");

$resultado = $verificaRota($path);
require($resultado);

require_once("footer.php");

?>

</body>
</html>