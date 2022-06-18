<?php

$smarty = new Template();
$logar = new Logar();

if(isset($_POST['campo_email']) && isset($_POST['campo_senha'])) {
    $usuario= $_POST['campo_email'];
    $senha = $_POST['campo_senha'];
    $logar->GetLogar($usuario,$senha); 

}
//teste
//$logar->GetLogar('rafael@gmail.com','12345');

if(Logar::ClienteLogado()==true) {
   $smarty->assign('USUARIO','<h5 class="alert alert-success text-center"> Seja bem-vindo ' . $_SESSION['CLIENTE']['client_email']. '</h5>'); 
} else {
    $smarty->assign('USUARIO','<h5 class="alert alert-warning text-center">Usuário NÃO LOGADO<h5>');
}
$smarty->display("logar.html");

?>