<?php

$smarty = new Template();
$carrinho = new Carrinho();

$smarty->assign('PRODUTOS',$carrinho->GetCarrinho());

echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '<pre>';

$smarty->display('carrinho.tpl');


?>