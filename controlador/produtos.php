
<?php
//<h1>Páginas de <b>PRODUTOS</b></h1>

$smarty = new Modelo();
$produtos = new Produtos();
//busca só vai funcinar na pagina home e de produtos
//se o botao de buscar estiver preenchido faz a busca pelo produto
if (isset($_GET["buscar-produtos"])==true) {       
    $item =filter_var($_GET["buscar-produtos"],FILTER_SANITIZE_STRING);
    $produtos->BuscarProdutosPorNome($item);
} 
else if(isset($_GET["buscar-produtos"])==true && isset(Routes::$pagina[1])==false) {
    $item =filter_var($_GET["buscar-produtos"],FILTER_SANITIZE_STRING);
    $produtos->BuscarProdutosPorNome($item);
}
//se tiver o id da categoria buscar produtos por categoria filtrando pelo id da categoria
else if(isset($_GET["buscar-produtos"])==false && isset(Routes::$pagina[1])==true) {
     $produtos->GetProdutosCategoriaId(Routes::$pagina[1]);
}
//senão mostra todos os produtos
else {    
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