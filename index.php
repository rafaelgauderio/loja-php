<?php
    require './biblioteca/autoload.php';

    //$email = new PHPMailer();

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

    /*
    Testando a conexao

    $data = new Conection();
    $sql = "SELECT * FROM categorias";
    $data->ExecuteQuery($sql);

    $list = $data->PrintData();


    //listando as categorias
    //var_dump($data);
    echo '<pre>';
    var_dump($list);
    echo '</pre>';

    echo 'total de categorias: ' . $data->TotalData();
    echo 'itens: ' . $data->GetItens();
   */
    
    $smarty->display('index.tpl');


?>