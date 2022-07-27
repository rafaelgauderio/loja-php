<?php

//echo $_SESSION['pedido'];
//se tiver buscar mostra a página de busca, senão a página do carrinho
if (isset($_GET["buscar-produtos"]) == true) {
    include_once Routes::get_controlador() . '/produtos.php';
    $item = filter_var($_GET["buscar-produtos"], FILTER_SANITIZE_STRING);
    $produtos->BuscarProdutosPorNome($item);
} else {
    if(isset($_SESSION['PRODUTOS'])==TRUE) {
        $smarty = new Modelo();
        $carrinho = new Carrinho();
        
        $smarty->assign('PRODUTOS',$carrinho->GetCarrinho());
        $smarty->assign('TOTALCARRINHO',Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()));
        $smarty->assign('PAGINA_ALTERAR_CARRINHO', Routes::pag_Alterar_Carrinho());
        $smarty->assign('PAGINA_PRODUTOS',Routes::pag_Produtos());
        $smarty->assign('PAGINA_CONFERIR_PEDIDO', Routes::pag_Finalizar_Pedido());
        
        /*
        echo '<pre>';
        var_dump($carrinho->GetCarrinho());
        echo '<pre>';
        */
        
        $smarty->display('carrinho.html');
        } else {
            echo '<h3 class="alert alert-danger text-center">O seu carrinho de compras está VAZIO!</h3>';  
        }
        
}



?>