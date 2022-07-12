<?php

$smarty = new Template();
$logar = new Logar();

if(isset($_POST['campo_email']) && isset($_POST['campo_senha'])) {
    //sanitizar variáveis
    $usuario= filter_var($_POST['campo_email'],FILTER_SANITIZE_STRING);
    $senha = filter_var($_POST['campo_senha'],FILTER_SANITIZE_STRING);
    $logar->GetLogar($usuario,$senha); 

}
//teste de login mocado
//$logar->GetLogar('rafael@gmail.com','12345');
$smarty->assign('ISLOGADO',Logar::ClienteLogado());
$smarty->assign('PAGINA_SENHA',Routes::pag_esqueci_senha());
$smarty->assign('PAGINA_CADASTRO',Routes::pag_de_cadastro());

if(Logar::ClienteLogado()==true) {
    $smarty->assign('ISLOGADO','<h4 class="alert alert-success text-center"> Seja bem-vindo ' . $_SESSION['CLIENTE']['client_email']. '</h4>'); 
    $smarty->assign('LOGOFF',Routes::pag_logoff());
    $smarty->assign('DADOS_CLIENTE',Routes::pag_dados_do_cliente());
    $smarty->assign('TROCAR_SENHA',Routes::pag_trocar_senha());
    //Logar::dadosCliente();
}
 //else if(Logar::ClienteLogado()==false){
    //$smarty->assign('ISLOGADO','<h5 class="alert alert-warning text-center">Usuário NÃO LOGADO<h5>');}

$smarty->display("logar.html");
?>