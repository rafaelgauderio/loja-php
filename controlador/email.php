<?php

    const EMAIL_PROFESSOR = "rafael.pinto@canoas.ifrs.edu.br"; 
    const EMAIL_SMTP = "smtp.gmail.com";
    const EMAIL_ADMIN = "deluca.melhoramentos@gmail.com";
    const EMAIL_NOME = "Contato da Loja deluca";
    const EMAIL_SENHA = "vdvvvleuajdcxdgx";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
   


$to =EMAIL_ADMIN;
$subject = "Email via formulário deluca tecnologia";
$message = "Email de " . $_GET['inputnome'] . "\r\n". 
"Mensagem: " . $_GET['inputarea'];
$headers = "From: " . $_GET['inputemail'] . "\r\n" .
    "Reply-To: ". EMAIL_ADMIN . "\r\n" .
    "X-Mailer: PHP/" . phpversion();


mail($to, $subject, $message, $headers);

?>
<script>alert('Email enviado com sucesso')</script>
<meta http-equiv="refresh" content="0; url='contato'"/>

