<?php

$smarty = new Template();
$produtos = new Produtos();
$produtos->GetProdutosId(Routes::$pagina[1]);

$smarty->assign('PRODUCT',$produtos->GetItens());

$smarty->display('produtos_desc.tpl');

//var_dump($produtos->GetItens());


?>