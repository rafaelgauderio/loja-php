<?php

    if(isset($_SESSION)==false) {
        session_start();
    }

    require './biblioteca/autoload.php';

    //não usar phpMailer, usar a função mail() nativa do php
    //$email = new PHPMailer(); 
    $produtos = new Produtos();
    $categorias = new Categorias();
    //método para buscar as categorias no menu
    $categorias->GetCategorias();
    $smarty = new Template();
    
    //Routes::get_pagina();  

    $smarty->assign('Nome','Rafael de Luca');
    $smarty->assign('TITULO_SITE',Constants::TITULO_SITE);
    $smarty->assign('GET_TEMA',Routes::get_SiteTEMA());
    $smarty->assign('GET_HOME',Routes::get_SiteHOME());
    $smarty->assign('GET_PAGINA_INICIAL',Routes::get_SiteHOME());
    $smarty->assign('PAG_CONTA',Routes::pag_conta());
    $smarty->assign('PAG_LOGAR',Routes::pag_Logar());
    $smarty->assign('PAG_CARRINHO',Routes::pag_Carrinho());
    $smarty->assign('PAG_CONTATO',Routes::pag_Contato());
    $smarty->assign('PAG_EMPRESA',Routes::pag_Empresa());
    $smarty->assign('PAG_CONOSCO',Routes::pag_Conosco());
    $smarty->assign('CATEGORIAS',$categorias->GetItens());
    $smarty->assign('PAG_PRODUTOS',Routes::pag_produtos());
    $smarty->assign('ISLOGADO',Logar::ClienteLogado());    
   
    /*
    $data = new Conection();
    $sql = "SELECT * FROM categorias";
    $data->ExecuteQuery($sql);

    $list = $data->PrintData();

    
    //listando as categorias
    var_dump($data);
    echo '<pre>';
    var_dump($list);
    echo '</pre>';

    echo 'total de categorias: ' . $data->TotalData();
    echo 'itens: ' . $data->GetItens();
    
    */
    $smarty->display('index.html');


?>