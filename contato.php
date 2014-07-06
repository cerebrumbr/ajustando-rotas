<form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label class="control-label">Nome</label>
        <div class="controls">
            <input type="text" name="nome" id="nome">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Email</label>
        <div class="controls">
            <input type="text" name="email" id="email">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Assunto</label>
        <div class="controls">
            <input type="text" name="assunto" id="assunto">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Mensagem</label>
        <div class="controls">
            <input type="text" name="mensagem" id="mensagem">
            <button type="submit" class="btn">Enviar</button>
        </div>
    </div>
</form>

'<div class="hero-unit">
<?PHP
if ($_POST) {

    echo '<p>Dados enviados com sucesso, abaixo seguem os dados que você enviou.</p>';

    echo ("Nome: ".$_POST['nome']."<br>");
    echo ("Email: ".$_POST['email']."<br>");
    echo ("Assunto: ".$_POST['assunto']."<br>");
    echo ("Mensagem: ".$_POST['mensagem']."<br>");
}

?>
</div>