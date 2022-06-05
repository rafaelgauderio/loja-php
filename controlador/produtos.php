
<?php
//<h1>Páginas de <b>PRODUTOS</b></h1>

$smarty = new Template();
$produtos = new Produtos();
if(isset(Routes::$pagina[1])==true) {
    $produtos->GetProdutosCategoriaId(Routes::$pagina[1]);
} else {
   $produtos->GetProdutos();
}


$smarty->assign('PRODUCT',$produtos->GetItens());
$smarty->assign('PRODUCT_CONTAGEM',$produtos->TotalData());
$smarty->assign('PRODUCT_DESCRIPTION', Routes::pag_ProdutosDescricao());
$smarty->display('produtos.html');

/*
echo '<pre>';
var_dump($produtos->GetItens());
echo '<pre>';
*/


?>