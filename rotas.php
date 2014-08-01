<?php

require_once("conexao.php");

$knownRoutes = [
    "" => "index.php",
    "home" => "index.php",
    "empresa" => "empresa.php",
    "produtos" => "produtos.php",
    "servicos" => "servicos.php",
    "contato" => "contato.php",
];

function curRoute() {
    return str_replace(".php", "", substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1));
}


$routeExists = function($route) use ($knownRoutes) {
    return array_key_exists($route, $knownRoutes);
};



if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} elseif ($routeExists(curRoute())) {

    $pageName = $knownRoutes[curRoute()];

    if (isset($_POST["_contato"]) && $_POST["_contato"] == 1) {
        $getPageContent = function() {
            echo '<div class="container"><div class="row"><div class="page-header"><h1>Contato</h1></div>'.
                '<div class="col-sm-offset-3 col-sm-6">'.
                '<h3>Dados enviados com sucesso!</h3><hr />'.
                '<p>'.$_POST["_nome"].'<br />'.$_POST["_email"].'<br />'.$_POST["_assunto"].'<br />'.
                $_POST["_mensagem"].'</div></div></div>';
        };
    } elseif (isset($_POST["_searchForm"]) && $_POST["_searchForm"] == 1) {
        $query = "%{$_POST['_pesquisa']}%";
        $getPageContent = function() use ($conn, $query) {
            $sql = "SELECT * FROM pages WHERE pageContent LIKE :query";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam("query", $query);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            echo '<div class="container"><div class="row"><div class="page-header"><h1>Pesquisa</h1></div>'.
                '<div class="col-sm-12">';
            if (count($result)) {
                foreach ($result as $page) {
                    echo "<a href=\"{$page['slug']}\">{$_POST['_pesquisa']} -> ".strtoupper($page['slug'])."</a><br />";
                }
            } else {
                echo "<h3>Termo pesquisado não foi encontrado.</h3>";
            }

            echo "</div></div></div>";
        };
    } else {
        $getPageContent = function () use ($conn, $pageName) {
            $sql = "SELECT pageContent FROM pages WHERE pageName = :pageName";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam("pageName", $pageName);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            echo $result["pageContent"];
        };
    }



} else {
    include "404.php";
}