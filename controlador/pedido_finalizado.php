<?php

$carrinho = new Carrinho();
$smarty = new Template();

$smarty->assign('PRODUTOS',$carrinho->GetCarrinho());
$smarty->assign('TOTALCARRINHO',Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()));

if(isset($_SESSION['PRODUTOS'])==TRUE && $carrinho->GetTotalCarrinho()!=0.00){

$smarty->assign('PAGINA_PEDIDO_FINALIZADO', Routes::pag_Pedido_Finalizado());
$smarty->display('pedido_finalizado.html');

} else {    
    echo  '<h4 class="alert alert-warning">'."Total em compras R$ " .Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()).'</h4>';  
    echo '<h4 class="alert alert-danger">Erro ao finalizar o seu pedido. Favor confererir todos os dados e tentar novamente. </h4>';  
}


?>