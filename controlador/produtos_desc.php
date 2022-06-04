<?php

$smarty = new Template();
$produtos = new Produtos();
$produtos->GetProdutosId(Routes::$pagina[1]);
$smarty->assign('PRODUCT',$produtos->GetItens());


$id=Routes::$pagina[1];
foreach ($produtos->getItens() as $pro) {
    $_SESSION['PRODUTOS'][$id]['ID'] = $pro['prod_id'];
    $_SESSION['PRODUTOS'][$id]['NOME'] = $pro['prod_nome'];
    $_SESSION['PRODUTOS'][$id]['PRECO'] = $pro['prod_preco'];
    $_SESSION['PRODUTOS'][$id]['QUANTI'] = 1;
    $_SESSION['PRODUTOS'][$id]['IMG'] = $pro['prod_img'];
    $_SESSION['PRODUTOS'][$id]['PRECO_BANCO'] = $pro['prod_preco_banco'];
    $id++;
}

$smarty->display('produtos_desc.tpl');

//var_dump($produtos->GetItens());




?>