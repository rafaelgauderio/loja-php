<?php

//se tiver buscar mostra os produtos, senão vai pra conta
if (isset($_GET["buscar-produtos"]) == true) {
    include_once Routes::get_controlador() . '/produtos.php';
    $item = filter_var($_GET["buscar-produtos"], FILTER_SANITIZE_STRING);
    $produtos->BuscarProdutosPorNome($item);
} else {
    $smarty = new Modelo();
    $smarty->display('conta.html');
    Logar::DadosCLiente();
}
