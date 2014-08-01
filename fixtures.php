<?php
require_once("conexao.php");

$sql = "CREATE DATABASE IF NOT EXISTS `siteSimples` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->closeCursor();
$stmt = null;

$sql = "DROP TABLE IF EXISTS `pages`;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->closeCursor();
$stmt = null;

$sql = "CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pageName` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `pageContent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->closeCursor();
$stmt = null;

$sql = "INSERT INTO `pages` (`id`, `pageName`, `slug`, `pageContent`) VALUES
(1, 'index.php', 'home', '<div class=\"container\">\r\n    <div class=\"page-header\">\r\n        <h1>Bem vindo ao Site Simples</h1>\r\n    </div>\r\n</div>'),
(2, 'empresa.php', 'empresa', '<div class=\"container\">\r\n    <div class=\"page-header\">\r\n        <h1>Empresa do Site Simples</h1>\r\n    </div>\r\n    <div class=\"row\">\r\n        <p>Ao examinar-se o paradigma trans-material da identidade, uma escolha se faz necessária: ou repelir a teoria moderna do conceito ou concluir de como a sociedade possui uma faculdade imediata. De certa forma, Humphey (1972) possibilita de como o corpus de Oswald de Andrade tem sido de feitura que recusa o realismo. Assim, o poeta tem sido analisado em um tipo de ''paradigma trans-material da identidade'' que inclui a linguagem como uma forma de efeito. Contudo, o poeta é analisado em um tipo de ''teoria textual construtivista'' que inclui a metanarratividade como uma forma de hierarquia. Luce Iragaray aplica a expressão ''paradigma trans-material da identidade'' para fazer compreender um efeito auto-justificativo.</p>\r\n    </div>\r\n</div>'),
(3, 'produtos.php', 'produtos', '<div class=\"container\">\r\n    <div class=\"page-header\">\r\n        <h1>Produtos</h1>\r\n    </div>\r\n    <div class=\"row\">\r\n        <div class=\"col-sm-4\">\r\n            <h3>O homem e o cavalo</h3>\r\n            <p>O estudioso costumou ser analisado em um tipo de ''teoria textual construtivista'' que inclui a arte como uma forma de cosmos.</p>\r\n            <a href=\"#\" class=\"btn btn-primary\">Detalhes</a>\r\n        </div>\r\n        <div class=\"col-sm-4\">\r\n            <h3>O escaravelho de ouro</h3>\r\n            <p>Humphey (2000) implica de como temos de escolher entre a teoria textual construtivista e a teoria textual construtivista.</p>\r\n            <a href=\"#\" class=\"btn btn-primary\">Detalhes</a>\r\n        </div>\r\n        <div class=\"col-sm-4\">\r\n            <h3>The Soft Machine</h3>\r\n            <p>Poderia-se dizer de como a historicidade do paradigma trans-material da identidade que se identifica em ''The Ticket that Exploded'' emerge novamente em ''The Soft Machine'', contudo em uma maneira mais auto-estimulante.</p>\r\n            <a href=\"#\" class=\"btn btn-primary\">Detalhes</a>\r\n        </div>\r\n    </div>\r\n</div>'),
(4, 'contato.php', 'contato', '<div class=\"container\">\r\n    <div class=\"page-header\">\r\n        <h1>Contato</h1>\r\n    </div>\r\n    <div class=\"row\">\r\n        <div class=\"col-sm-6 col-sm-offset-3\">\r\n            <form class=\"form-horizontal\" action=\"/contato\" method=\"POST\" role=\"contactform\">\r\n                <div class=\"form-group\">\r\n                    <label for=\"nome\" class=\"col-sm-3 control-label\">Nome</label>\r\n                    <div class=\"col-sm-9\">\r\n                        <input class=\"form-control\" type=\"text\" name=\"_nome\" id=\"nome\" required>\r\n                    </div>\r\n                </div>\r\n                <div class=\"form-group\">\r\n                    <label for=\"email\" class=\"col-sm-3 control-label\">Email</label>\r\n                    <div class=\"col-sm-9\">\r\n                        <input class=\"form-control\" type=\"email\" name=\"_email\" id=\"email\" required>\r\n                    </div>\r\n                </div>\r\n                <div class=\"form-group\">\r\n                    <label for=\"assunto\" class=\"col-sm-3 control-label\">Assunto</label>\r\n                    <div class=\"col-sm-9\">\r\n                        <input class=\"form-control\" type=\"text\" name=\"_assunto\" id=\"assunto\" required>\r\n                    </div>\r\n                </div>\r\n                <div class=\"form-group\">\r\n                    <label for=\"mensagem\" class=\"col-sm-3 control-label\">Mensagem</label>\r\n                    <div class=\"col-sm-9\">\r\n                        <textarea class=\"form-control\" name=\"_mensagem\" id=\"mensagem\" rows=\"5\"></textarea>\r\n<input type=\"hidden\" name=\"_contato\" value=1 />                    </div>\r\n                </div>\r\n                <div class=\"col-sm-9 col-sm-offset-3\">\r\n                    <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>\r\n                </div>\r\n            </form>\r\n        </div>\r\n    </div>\r\n</div>\r\n'),
(5, 'servicos.php', 'servicos', '<div class=\"container\">\r\n    <div class=\"page-header\">\r\n        <h1>Serviços</h1>\r\n    </div>\r\n    <div class=\"row\">\r\n        <div class=\"col-sm-6\">\r\n            <h3>Idealismo Paródico</h3>\r\n            <p>O tema mais importante do corpus Luís Fernando Veríssimo costumou ser a textualidade, e a futilidade que decorre, da sociedade trans-matriarcal. Assim, Jacques Lacan adota a expressão ''teoria textual construtivista'' para aludir ao papel do observador como leitor. O tema crítico da abordagem de Carvalho (2002) sobre o paradigma semiótico da narrativa poderá no futuro ser a falha, e a identificação que decorre, da ocidentalidade modernista. </p>\r\n            <p>Uma miríade de sublimações referentes ao paradigma trans-material da identidade existem. Muitos paradigmas referentes ao paradigma semiótico da narrativa podem ser propostos. Uma miríade de teorias referentes a não dialética como tal, mas sim pré-dialética podem ser propostas.</p>\r\n        </div>\r\n        <div class=\"col-sm-6\">\r\n            <h3>Teoria Textual</h3>\r\n            <p>Poderia-se dizer de como Luce Iragaray obriga a utilização de paradigma semiótico da narrativa para modificar a classe social. Várias construções referentes ao papel do estudioso como teórico podem ser obtidas. Assim, o artista poderá no futuro ser analisado em um tipo de ''paradigma semiótico da narrativa'' que inclui a realidade como uma forma de totalidade.</p>\r\n            <p>De tal maneira, Jacques Lacan usa a expressão ''paradigma trans-material da identidade'' para referir-se ao encontro entre ocidentalidade textual e ocidentalidade como um todo. De certa forma, admitindo-se a teoria textual construtivista, o corpus de Albert Camus poderá no futuro ser de feitura continuativa do realismo social.</p>\r\n        </div>\r\n    </div>\r\n</div>');
";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->closeCursor();
$stmt = null;

echo "Fixtures loaded";