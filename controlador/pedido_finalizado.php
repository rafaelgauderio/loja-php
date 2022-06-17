<?php

$carrinho = new Carrinho();
$smarty = new Template();

$smarty->assign('PRODUTOS',$carrinho->GetCarrinho());
$smarty->assign('TOTALCARRINHO',Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()));
$smarty->assign('TEMA', Routes::get_SiteTEMA());

if(isset($_SESSION['PRODUTOS'])==TRUE && $carrinho->GetTotalCarrinho()!=0.00){

$smarty->assign('PAGINA_PEDIDO_FINALIZADO', Routes::pag_Pedido_Finalizado());

//testando salvar um pedido na tabela pedidos
$pedido = new Pedidos();
$cliente=50;
$referencia='ref_item_5415';
$codigo=$_SESSION['pedido'];

//se conseguir salvar um pedido, dae limpa as sessao
//limpa os pedidos do carrinho e muda o código de login da sessao
if($pedido->SalvarPedido($cliente,$codigo,$referencia)==true) {
    $pedido->LimparSessao();
}

$smarty->display('pedido_finalizado.html');

} else {    
    echo  '<h4 class="alert alert-warning">'."Total em compras R$ " .Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()).'</h4>';  
    echo '<h4 class="alert alert-danger">Erro ao finalizar o seu pedido. Favor confererir todos os dados e tentar novamente. </h4>';  
}


?>