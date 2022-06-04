<?php

if(isset($_SESSION['PRODUTOS'])==TRUE) {
$smarty = new Template();
$carrinho = new Carrinho();

$smarty->assign('PRODUTOS',$carrinho->GetCarrinho());
$smarty->assign('TOTALCARRINHO',Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()));
$smarty->assign('PAGINA_ALTERAR_CARRINHO', Routes::pag_Alterar_Carrinho());

/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '<pre>';
*/

$smarty->display('carrinho.tpl');
} else {
    echo '<h3 class="alert alert-danger"> O seu carrinho de compras está VAZIO!</h3>';  
}


?>