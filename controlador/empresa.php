<?php
/*
$smarty = new Modelo();
$smarty->display('empresa.html');
*/
//se o usuário fizer busca por produtos, mostra os produtos senão a página da empresa
if (isset($_GET["buscar-produtos"])==true) {    
    include_once Routes::get_controlador() .'/produtos.php';   
    $item =filter_var($_GET["buscar-produtos"],FILTER_SANITIZE_STRING);
    $produtos->BuscarProdutosPorNome($item);
} else {
    include_once (Routes::get_view() . '/empresa.html');
}


?>

