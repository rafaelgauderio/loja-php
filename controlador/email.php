<?php

//php que faz a action no campo da página fale conosco

    const EMAIL_PROFESSOR = "rafael.pinto@canoas.ifrs.edu.br"; 
    const EMAIL_SMTP = "smtp.gmail.com";
    const EMAIL_ADMIN = "deluca.melhoramentos@gmail.com";
    const EMAIL_NOME = "Contato da Loja deluca";
    const EMAIL_SENHA = "jurvmbjndlakipet";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
   

//só vai funcionar hospedado
$to =EMAIL_ADMIN;
$subject = "Email via formulário deluca tecnologia";
$message = "Email de " . $_GET['inputnome'] . "\r\n". 
"Mensagem: " . $_GET['inputarea'];
$headers = "From: " . $_GET['inputemail'] . "\r\n" .
    "Reply-To: ". EMAIL_ADMIN . "\r\n" .
    "X-Mailer: PHP/" . phpversion();


//mail($to, $subject, $message, $headers);


//enviando email com classe que extende de phpmailer (funciona em localhost) 
$email = new Email();

$mensagem = "Nome " . filter_var($_GET['inputnome'],FILTER_SANITIZE_STRING) . "<br>\r\n".
            "Email: " .  filter_var($_GET['inputemail'],FILTER_SANITIZE_EMAIL) . "<br>\r\n" .
            "telefone: " . filter_var($_GET['inputtelefone'],FILTER_SANITIZE_STRING) . "<br>\r\n".
            "Mensagem: " . filter_var($_GET['inputarea'],FILTER_SANITIZE_STRING) . "<br>\r\n".
            "Deseja Receber emails? " . filter_var($_GET['inputpromo'],FILTER_SANITIZE_STRING) . "<br>\r\n"; 
$vetorDestinatarios = array(Constants::SITE_EMAIL);
$email->EnviarEmail('Formulario de Contato - DeLuca Tecnologia', $mensagem, $vetorDestinatarios);


?>
  
<meta http-equiv="refresh" content="0; url='contato'"/>

