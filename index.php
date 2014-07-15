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

require_once("rotas.php");

require_once("header.php");

$resultado = $verificaRota($path);
require($resultado);

require_once("footer.php");

?>

</body>
</html>