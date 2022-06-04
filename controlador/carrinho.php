<?php

$smarty = new Template();
$carrinho = new Carrinho();

$smarty->assign('PRODUTOS',$carrinho->GetCarrinho());
$smarty->assign('TOTALCARRINHO',Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()));

/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '<pre>';
*/

$smarty->display('carrinho.tpl');


?>