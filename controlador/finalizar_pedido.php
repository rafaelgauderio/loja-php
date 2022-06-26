<?php
//tem que estar logado para poder finalizar o pedido
if (Logar::ClienteLogado() == true) {
    if (isset($_SESSION['PRODUTOS']) == TRUE) {       

        $smarty = new Template();
        $carrinho = new Carrinho();

        $smarty->assign('PRODUTOS', $carrinho->GetCarrinho());
        $smarty->assign('TOTALCARRINHO', Carrinho::MoedaBrazil($carrinho->GetTotalCarrinho()));
        $smarty->assign('PAGINA_ALTERAR_CARRINHO', Routes::pag_Alterar_Carrinho());
        $smarty->assign('PAGINA_PRODUTOS', Routes::pag_Produtos());
        $smarty->assign('PAGINA_CARRINHO', Routes::pag_Carrinho());
        $smarty->assign('PAGINA_FINALIZAR_PEDIDO', Routes::pag_Finalizar_Pedido());
        $smarty->assign('PAGINA_PEDIDO_FINALIZADO', Routes::pag_Pedido_Finalizado());
        $smarty->display('finalizar_pedido.html');
        
    } else {
        echo '<h3 class="alert alert-danger"> O seu carrinho de compras está VAZIO!</h3>';
    }
} else {
    Logar::areaRestrita();
}
