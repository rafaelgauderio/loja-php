<?php

$smarty = new Template();
$cliente= new Clientes(); 
Logar::dadosCliente();

if((isset($_POST['senha_atual'])==true) AND (isset($_POST['nova_senha'])==true) AND
 (isset($_POST['confirma_nova_senha'])==true)) {
    //sanitizar as variáveis
    $email_cliente=$_SESSION['CLIENTE']['client_email']; 
    $senha_atual = $_POST['senha_atual'];
    $senha_atual = filter_var($senha_atual,FILTER_SANITIZE_STRING);    
    $senha_atual = Logar::CriptografarSenha($senha_atual);
    //echo $senha_atual . "<br>";
    //echo $_SESSION['CLIENTE']['client_senha'] . "<br>";
    $nova_senha = $_POST['nova_senha'];
    $nova_senha = filter_var($nova_senha,FILTER_SANITIZE_STRING);
    //echo $nova_senha  . "<br>";    
    $confirma_nova_senha = $_POST['confirma_nova_senha'];
    $confirma_nova_senha = filter_var($confirma_nova_senha,FILTER_SANITIZE_STRING);
    //echo $confirma_nova_senha;
    
    if($nova_senha != $confirma_nova_senha) {
       
        Routes::redirecionarPagina(3.5,Routes::pag_trocar_senha());
        echo "<script>alert('As senhas novas não correspodem.');</script>";
        echo '<h4 class="alert alert-warning text-center">A nova senha informada não coincide com o campo de confirmação. </h3>';
        
        exit();
    }
    
    else if (($senha_atual) != ($_SESSION['CLIENTE']['client_senha'])) {
    echo "<script>alert('A senha atual está incorreta');</script>";
    echo '<h4 class="alert alert-warning text-center">A senha informada não correspone a senha atual. </h4>';        
    Routes::redirecionarPagina(3.5,Routes::pag_trocar_senha());
    exit();

        }
        
        $email_cliente=$_SESSION['CLIENTE']['client_email'];      
        $cliente->trocarSenha($nova_senha,$email_cliente);
        echo '<h4 class="alert alert-success text-center">Senha altera com sucesso. Redirecionando para Conta </h4>';        
        Routes::redirecionarPagina(3.5,Routes::pag_conta());   

} else {
    $smarty->display('trocar_senha.html');
}
