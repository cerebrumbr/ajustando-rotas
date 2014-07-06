<div class="container">
    <div class="page-header">
        <h1>Contato</h1>
    </div>
    <p>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
    ?>
            <p style="text-align: center;">
                <b>Dados enviados com sucesso!</b><br />
                Segue abaixo os dados que você enviou:<br /><br />
                <b>Nome</b>: <?php echo $_POST['nome']; ?><br />
                <b>E-mail:</b> <?php echo $_POST['mail']; ?><br />
                <b>Assunto:</b> <?php echo $_POST['assunto']; ?><br />
                <b>Mensagem:</b> <?php echo $_POST['mensagem']; ?>
            </p>
    <hr>
    <?php
        }
    ?>
    <form class="form-horizontal" method="POST" action="index.php?p=contato" style="text-align: left;">
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="mail">E-mail</label>
                <div class="col-md-4">
                    <input id="mail" name="mail" type="email" placeholder="exemplo@exemplo.com.br" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="assunto">Assunto</label>
                <div class="col-md-4">
                    <input id="assunto" name="assunto" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button"></label>
                <div class="col-md-4">
                    <button id="button" name="button" class="btn btn-primary">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>
    </p>
</div>