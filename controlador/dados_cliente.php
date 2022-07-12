<?php

$smarty = new Template();

if(Logar::ClienteLogado()==false) {
    Logar::areaRestrita();
    Routes::redirecionarPagina(2.8,Routes::pag_logar());
    exit();
} else {
    foreach($_SESSION['CLIENTE']  as $field => $value) {
        $smarty->assign($field,$value);
    }
    $smarty->display('dados_do_cliente.html');
}
