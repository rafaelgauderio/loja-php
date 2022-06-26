<?php

$carrinho = new Carrinho();
$smarty = new Template();

$smarty->assign('PRODUTOS',$carrinho->GetCarrinho());
$smarty->assign('TOTALCARRINHO',Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()));
$smarty->assign('TEMA', Routes::get_SiteTEMA());

if(isset($_SESSION['PRODUTOS'])==TRUE && $carrinho->GetTotalCarrinho()!=0.00){

$smarty->assign('PAGINA_PEDIDO_FINALIZADO', Routes::pag_Pedido_Finalizado());

if(isset($_SESSION['PEDIDO_GERAL']['pedido'])==false) {
    //fazer um código único para a sessão do usuário, criar um código unico do pedido com md5
    //$_SESSION['PEDIDO_GERAL']['pedido'] = md5(uniqid(date('Ymd:Hms')));
    $_SESSION['PEDIDO_GERAL']['pedido'] = $_SESSION['CLIENTE']['client_id'] . date('Ymd:Hms');
} 
if(isset($_SESSION['PEDIDO_GERAL']['referencia'])==false) {
    //diferenciar do codido do pedido pelo ano apenas com 2 digitos
   $_SESSION['PEDIDO_GERAL']['referencia'] = $_SESSION['CLIENTE']['client_id'] . date('ymd:Hms');
}
//testando salvar um pedido na tabela pedidos
$pedido = new Pedidos();
$cliente=$_SESSION['CLIENTE']['client_id'];
$codigo=$_SESSION['PEDIDO_GERAL']['pedido'];
$referencia=$_SESSION['PEDIDO_GERAL']['referencia'];

//se conseguir salvar um pedido, dae limpa a sessao
//limpa os pedidos do carrinho e muda o código de login da sessao
if($pedido->SalvarPedido($cliente,$codigo,$referencia)==true) {
    $pedido->LimparSessao();
}

$smarty->display('pedido_finalizado.html');

} else {    
    echo  '<h4 class="alert alert-warning">'."Total em compras R$ " .Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()).'</h4>';  
    echo '<h4 class="alert alert-danger">Erro ao finalizar o seu pedido. Favor confererir todos os dados e tentar novamente. </h4>';  
}
