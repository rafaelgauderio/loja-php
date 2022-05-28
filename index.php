<?php
    require './biblioteca/autoload.php';

    $email = new PHPMailer();

    $smarty = new Template();
    //Routes::get_pagina();  

    $smarty->assign('Nome','Rafael de Luca');
    $smarty->assign('TITULO_SITE',Config::TITULO_SITE);
    $smarty->assign('GET_TEMA',Routes::get_SiteTEMA());
    $smarty->assign('GET_HOME',Routes::get_SiteHOME());
    $smarty->assign('PAG_CONTA',Routes::pag_Conta());
    $smarty->assign('PAG_CARRINHO',Routes::pag_Carrinho());
    $smarty->assign('PAG_CONTATO',Routes::pag_Contato());
    $smarty->assign('PAG_EMPRESA',Routes::pag_Empresa());
    $smarty->assign('PAG_CONOSCO',Routes::pag_Conosco());

    $data = new Conection();

    var_dump($data);
    
    $smarty->display('index.tpl');


?>