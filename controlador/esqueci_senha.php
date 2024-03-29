<?php
$smarty = new Modelo();

//verificar se o email existe no bando antes de recuperar a senha

if(isset($_POST['client_email'])==true) {
    $cliente = new Clientes();
    $email_do_cliente=$cliente->setClient_email($_POST['client_email']);
    $email_cadastrado= $cliente->getClient_email();
    //$cliente->VerificaEmailJaCadastrado($email_do_cliente);        
    if($cliente->VerificaEmailJaCadastrado($email_cadastrado) != 0) {
        echo '<h4 class="alert alert-success text-center">Email encontrado no sistema.</h4>';
        //gerar um nova senha de 6 digitos para o cliente
        $senhaGerada = $cliente->geradorDeSenha();
        //echo $senhaGerada;
        $cliente->trocarSenha($senhaGerada,$email_cadastrado);
        
        /*só vai funcinar hospedado
        $emails = ''. $email_cadastrado . ", deluca1712@gmail.com'"; 
        $to =$emails;        
        $subject = "Solicitação de alteração de senha DeLuca Tecnologia";
        $message = "Segue sua nova senha criada: " . $senhaGerada;
        $headers = "From: " . EMAIL_ADMIN . "\r\n" .
        "Reply-To: ". EMAIL_ADMIN . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
        mail($to, $subject, $message, $headers);
        */

        // phpmailer funciona em localhost
        //enviar email para o cliente com a senha gerada;
        $emailSenha = new Email();
        $mensagem = "Você solicitou um nova senha na opção esqueci minha senha do site De Luca tecnologia.
        <br>NovaSenha: ". $senhaGerada . "<br>";
        $destinatario = array($cliente->getClient_email());
        $emailSenha->EnviarEmail('Solicitacação de nova senha do site DeLuca tecnologia',$mensagem,$destinatario); 

        echo '<h4 class="alert alert-info text-center">Foi enviado para o email cadastrado uma nova senha.
             <br>Aguarde. Redirecionando para <b>Esqueci minha senha</b></h4>';
             Routes::redirecionarPagina(3.5,Routes::pag_Logar());
        
    }   else {
        echo '<h4 class="alert alert-danger text-center">Email não encontrado no sistema.
        <br>Realize um novo cadastro.
        <br>Aguarde. Redirecionando para Login.</h4>';
        Routes::redirecionarPagina(4.5,Routes::pag_esqueci_senha());
 }

} else {
    $smarty->display('esqueci_senha.html');
}
