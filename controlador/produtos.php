
<?php
//<h1>Páginas de <b>PRODUTOS</b></h1>

$smarty = new Template();
$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRODUCT',$produtos->GetItens());
$smarty->display('produtos.tpl');

/*
echo '<pre>';
var_dump($produtos->GetItens());
echo '<pre>';
*/


?>