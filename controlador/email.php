<?php

/*
const EMAIL_SMTP = "smtp.gmail.com";
    const EMAIL_USUARIO = "delucaloja@gmail.com";
    const EMAIL_NOME = "Contato da Loja deluca";
    const EMAIL_SENHA = "delucaloja2530*";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
*/

$to = Constants::EMAIL_USUARIO;
$subject = "Email via formulário deluca tecnologia";
$message = "Email de " . $_GET['inputnome'] . "\r\n". 
"Mensagem: " . $_GET['inputarea'];
$headers = "From: " . $_GET['inputemail'] . "\r\n" .
    "Reply-To: ". Constants::EMAIL_USUARIO . "\r\n" .
    "X-Mailer: PHP/" . phpversion();


mail($to, $subject, $message, $headers);

?>
<script>alert('Email enviado com sucesso')</script>
<meta http-equiv="refresh" content="0; url='contato'"/>

