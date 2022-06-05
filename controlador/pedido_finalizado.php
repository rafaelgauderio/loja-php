<?php

if(isset($_SESSION['PRODUTOS'])==TRUE) {
$smarty = new Template();
$carrinho = new Carrinho();

$smarty->assign('PRODUTOS',$carrinho->GetCarrinho());
$smarty->assign('TOTALCARRINHO',Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()));
$smarty->assign('PAGINA_PEDIDO_FINALIZADO', Routes::pag_Pedido_Finalizado());



$smarty->display('pedido_finalizado.html');
} else {
    echo '<h3 class="alert alert-danger">Erro ao finalizar o seu pedido. Favor confererir todos os dados e tentar novamente</h3>';  
}


?>