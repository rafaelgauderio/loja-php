<?php
    require './lib/autoload.php';

    $email = new PHPMailer();

    $smarty = new Template();
    //Routes::get_pagina();  

    $smarty->assign('Nome','Rafael de Luca');
    $smarty->assign('GET_TEMA',Routes::get_SiteTEMA());
    
    $smarty->display('index.tpl');


?>