<?php
$to = Config::EMAIL_USER;

$subject = "Email via formulário deluca tecnologia";
$message = "Email de " . $_GET['inputnome'] . "\r\n". 
"Mensagem: " . $_GET['inputarea'];
$headers = "From: " . $_GET['inputemail'] . "\r\n" .
    "Reply-To: ". Config::EMAIL_USER . "\r\n" .
    "X-Mailer: PHP/" . phpversion();


mail($to, $subject, $message, $headers);

?>
<script>alert('Email enviado com sucesso')</script>
<meta http-equiv="refresh" content="0; url='contato'"/>

