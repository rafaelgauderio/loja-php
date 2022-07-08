<?php
$smarty = new Template();

//verificar se o email existe no bando antes de recuperar a senha

if(isset($_POST['client_email'])==true) {
    $cliente = new Clientes();
    $email_do_cliente=$cliente->setClient_email($_POST['client_email']);
    //$cliente->VerificaEmailJaCadastrado($email_do_cliente);
    if($cliente->VerificaEmailJaCadastrado($cliente->getClient_email()) != 0) {
        echo '<h4 class="alert alert-success text-center">Email encontrado no sistema.</h4>';
    }   else {
        echo '<h4 class="alert alert-danger text-center">Email não encontrado no sistema.
        <br>Realize um novo cadastro.</h4>';
 }

} else {
    $smarty->display('esqueci_senha.html');
}
